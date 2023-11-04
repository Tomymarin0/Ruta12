<?php
require_once __DIR__ . "/../../../php/repositories/FileSectionRepository.php";
require_once __DIR__ . "/../../../php/services/FileUploader.php";

if($_POST["file_id"] && $_POST["section_id"]) {
    $fileSectionRepository = new FileSectionRepository();
    $fileUploader = new FileUploader();
    $fileSection = $fileSectionRepository->find($_POST["file_id"]);
    $fileUploader->deletePath("../../../" . $fileSection->getFilePath());
    $fileSectionRepository->delete($_POST["file_id"]);
    $fileSectionRepository->updatePosition($_POST["section_id"]);
}