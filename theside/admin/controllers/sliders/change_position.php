<?php
require_once __DIR__ . "/../../../php/repositories/SliderRepository.php";

if (isset($_POST['update'])) {
   $sliderRepository = new SliderRepository();
    foreach($_POST['positions'] as $position) {
       $index = $position[0];
       $newPosition = $position[1];
  
       $sliderRepository->changePosition($newPosition , $index);
    }
  
    exit('success');
  }