<?php
require_once __DIR__ . "/../../../php/repositories/FileSectionRepository.php";

if (isset($_POST['update'])) {
   $fileSectionRepository = new FileSectionRepository();
    foreach($_POST['positions'] as $position) {
       $index = $position[0];
       $newPosition = $position[1];
  
       $fileSectionRepository->changePosition($newPosition , $index);
    }
  
    exit('success');
}