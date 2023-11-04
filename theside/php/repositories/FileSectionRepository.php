<?php
require_once __DIR__. "/../services/Mysql.php";
require_once __DIR__. "/../clases/FileSection.php";
require_once __DIR__. "/../repositories/BaseRepository.php";

function ordFileSections($FileSectionObject1 , $FileSectionObject2) {
    if ($FileSectionObject1->getPosition() == $FileSectionObject2->getPosition()) {
        return 0;
    }
    return ($FileSectionObject1->getPosition() < $FileSectionObject2->getPosition()) ? -1 : 1;
}

class FileSectionRepository extends BaseRepository{

    public function __construct() {
        $this->table = "section_file";
    }

    public function find($id) {
        $fileSection = $this->baseFind($id);

        $fileSectionObject = new FileSection();
        $fileSectionObject->setId($fileSection['id']);
        $fileSectionObject->setPosition($fileSection['position']);
        $fileSectionObject->setFilePath($fileSection['file_path']);

        return $fileSectionObject;
    }

    public function save($fileSectionObject , $idSection) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        if($this->baseFind($fileSectionObject->getId()))
        {
            $fileSectionId = $fileSectionObject->getId();
            $sql = "UPDATE $this->table SET 
            position = ? , file_path = ? WHERE id = $fileSectionId";
        }
        else {
            $sql = "INSERT INTO $this->table VALUES 
            (null, ? , ? , $idSection)";
        }

        $position = $fileSectionObject->getPosition();
        $path = $fileSectionObject->getFilePath();
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("is", $position,$path);
        $stmt->execute();
        $stmt->close();
    }

    public function updatePosition($idSection) {
        $fileSectionObjects = $this->findAllAsociate("section_id" , $idSection);
        $fileSectionObjects = $this->orderFileSection($fileSectionObjects);

        for ($i=0; $i < count($fileSectionObjects) ; $i++) { 
            $fileSectionObjects[$i]->setPosition($i+1);
            $this->save($fileSectionObjects[$i] ,$idSection);
        }
    }

    public function orderFileSection($FileSectionObjects) {
        usort($FileSectionObjects , 'ordFileSections');
        return $FileSectionObjects;
    }

    public function changePosition($newPosition , $id) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        $sql = "UPDATE $this->table SET position = ? WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ii",
        $newPosition,
        $id
        );
        $stmt->execute();
        $stmt->close();
    }
}