<?php
require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../repositories/SectionRepository.php";
require_once __DIR__ . "/../repositories/FileSectionRepository.php";
require_once __DIR__ . "/../services/FileUploader.php";
require_once __DIR__ . "/../services/obtenerHost.php";
require_once __DIR__ . "/../clases/FileSection.php";

$sectionId = null;
if(isset($_GET["id"])) $sectionId = $_GET["id"];
$sectionRepository = new SectionRepository();
$fileSection = new FileSection();
$fileUploader = new FileUploader();
$section = $sectionRepository->find($sectionId);

function getInfoFile($files , $position) {
    return [
        'name' => $files["name"][$position],
        'size' => $files["size"][$position],
        'type' => $files["type"][$position],
        'tmp_name' => $files["tmp_name"][$position]
    ];
}

$errorMessage = null;
$filesSections = [];
if($files = $_FILES['files']) { 
    for ($i=0; $i < count($files) ; $i++) { 
        if($files['error'][$i] === 0) {
            $response = $fileUploader->addFile(getInfoFile($files , $i) , null ,SECTIONS_PATH);
            if($response["error"]) {
                $errorMessage = $response["message"];
                break;
            }
            else {
                $fileSection = new FileSection();
                if($section->getId()) $fileSection->setPosition(count($section->getFileSections()) + $i + 1);
                else $fileSection->setPosition($i + 1);
                $fileSection->setFilePath($response["newPath"]);
                $filesSections[] = $fileSection;
            }
        }
        else  {
            if($files['name'][$i])
            {
                $errorMessage = "Error desconocido al momento de subir el archivo" . $files['name'][$i];
                break;
            }
        }
    }
}
if($title = $_POST["title"]) $section->setTitle($title);
if($introduction = $_POST["introduction"]) $section->setIntroduction($introduction);
if($textBlockA = $_POST["text_block_a"]) $section->setTextBlockA($textBlockA);
if($feacturedBlockA = $_POST["featured_block_a"]) $section->setFeacturedBlockA($feacturedBlockA);
if($textBlockB = $_POST["text_block_b"]) $section->setTextBlockB($textBlockB);
if($feacturedBlockB = $_POST["featured_block_b"]) $section->setFeacturedBlockB($feacturedBlockB);
$section->setLinkSection($_POST["links"]);
$section->setIntroductionLink($_POST["introduction_link"]);
if(!empty($filesSections)) $section->setFileSections($filesSections);
$response = $sectionRepository->save($section);

if(!empty($errorMessage)) {
    setcookie("response" , $errorMessage , time() + 1 , '/');
    header("Location: " . getHost() . "/admin/app/section.php?id=". $section->getId());
    exit();
}

else if($response["error"]) {
    setcookie("response" , $response["message"] , time() + 1 , '/');
    header("Location: " . getHost() . "/admin/app/section.php?id=". $section->getId());
    exit();
}
else {
    setcookie("response" , "exito" , time() + 1 , '/');
    header("Location: " . getHost() . "/admin/app/section.php?id=". $section->getId());
    exit();
}