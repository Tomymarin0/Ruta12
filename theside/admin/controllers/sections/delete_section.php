<?php
require_once __DIR__ . "/../../../php/repositories/SectionRepository.php";

if($_POST["section_id"]) {
    $fileSectionRepository = new SectionRepository();
    $fileSectionRepository->delete($_POST["section_id"]);
}