<?php
require_once __DIR__. "/../services/Mysql.php";
require_once __DIR__. "/../clases/Section.php";
require_once __DIR__. "/../services/Validator.php";
require_once __DIR__. "/../services/FileUploader.php";
require_once __DIR__. "/../repositories/CommentRepository.php";
require_once __DIR__. "/../repositories/FileSectionRepository.php";
require_once __DIR__. "/../repositories/BaseRepository.php";



class SectionRepository  extends BaseRepository{

    public function __construct () {
        $this->table = "sections";
        $this->identifier = "section_id";
    }

    public function find($id) {
        $commentRepository = new CommentRepository();
        $fileSectionsRepository = new FileSectionRepository();
        $section = $this->baseFind($id);
        $fileSections = $fileSectionsRepository->findAllAsociate($this->identifier,$id);
        $fileSections = $fileSectionsRepository->orderFileSection($fileSections);
        $comments = $commentRepository->findAllAsociate($this->identifier,$id);

        $sectionObject = new Section();
        $sectionObject->setId($section['id']);
        $sectionObject->setTitle($section['title']);
        $sectionObject->setIntroduction($section['introduction']);
        $sectionObject->setTextBlockA($section['text_block_a']);
        $sectionObject->setTextBlockB($section['text_block_b']);
        $sectionObject->setFeacturedBlockA($section['featured_block_a']);
        $sectionObject->setFeacturedBlockB($section['featured_block_b']);
        $sectionObject->setFechaRealizada($section['fecha_realizado']); 
        $sectionObject->setLinkSection($section['links']); 
        $sectionObject->setIntroductionLink($section["introduction_link"]);
        $sectionObject->setComments($comments);
        $sectionObject->setFileSections($fileSections);
        
        return $sectionObject;
    }

    public function save(&$sectionObject) {
        if(!$this->validate($sectionObject)) return [
            "error" => true,
            "message" => "Fallaron las validaciones"
        ];

        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        $idSection = $sectionObject->getId();
        
        if($this->baseFind($idSection)) {
            $sql = "UPDATE $this->table SET 
            title = ? ,
            introduction = ? ,
            text_block_a = ? , 
            text_block_b = ? , 
            featured_block_a = ? , 
            featured_block_b = ? ,
            links = ? , 
            introduction_link = ?
            WHERE id = $idSection";
        }
        else {
            $today = date('Y-m-d H:i:s');
            $sql = "INSERT INTO $this->table
            VALUES (NULL, ? , ? , ? , ? , ? , ? , '$today' , ? , ?);";
        };
        
        $titulo = $sectionObject->getTitle();
        $introduction = $sectionObject->getIntroduction();
        $textBlockA = $sectionObject->getTextBlockA();
        $textBlockB = $sectionObject->getTextBlockB();
        $feacturedBlockA = $sectionObject->getFeacturedBlockA();
        $feacturedBlockB = $sectionObject->getFeacturedBlockB();
        $linkSection = $sectionObject->getLinkSection();
        $introductionLink = $sectionObject->getIntroductionLink();

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssssssss",
        $titulo,
        $introduction,
        $textBlockA,
        $textBlockB,
        $feacturedBlockA,
        $feacturedBlockB,
        $linkSection,
        $introductionLink
        );
        $stmt->execute();
        $stmt->close();

        if(empty($idSection)) {
            $idSection = $mysqli->insert_id;
            $sectionObject->setId($idSection);
        }

        if($fileSections = $sectionObject->getFileSections()){
            $fileSectionsRepository = new FileSectionRepository();
            foreach ($fileSections as $fileSection) {
                $fileSectionsRepository->save($fileSection , $idSection);
            }
        }
    }

    private function validate($sectionObject) {
        $validator = new Validator();
        if(!empty($sectionObject->getLinkSection()))
            if(!$validator->validateUrl($sectionObject->getLinkSection() ,MEDIUM_TEXT)) return false;

        return $validator->validateText($sectionObject->getTitle() , SHORT_TEXT) &&
        $validator->validateText($sectionObject->getIntroduction() , MEDIUM_TEXT) &&
        $validator->validateText($sectionObject->getTextBlockA() , LARGE_TEXT) &&
        $validator->validateText($sectionObject->getFeacturedBlockA() , LARGE_TEXT) &&
        $validator->validateText($sectionObject->getTextBlockB() , LARGE_TEXT) &&
        $validator->validateText($sectionObject->getFeacturedBlockB() , LARGE_TEXT);
    }

    public function delete($id) {
        $fileUploader = new FileUploader();
        $section = $this->find($id);

        foreach ($section->getFileSections() as $file) {
            $fileUploader->deletePath(__DIR__ . "/../../" .$file->getFilePath());
        }

        parent::delete($id);
    }

    public function getImage($id) {
        $fileUploader = new FileUploader();
        $section = $this->find($id);
        foreach ($section->getFileSections() as $fileSection) {
            if($fileUploader->isImage($fileSection->getFilePath())) return $fileSection->getFilePath();
        }
    }
}