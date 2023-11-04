<?php
require_once __DIR__. "/../services/Mysql.php";
require_once __DIR__. "/../clases/Slider.php";
require_once __DIR__. "/../repositories/BaseRepository.php";

class SliderRepository extends BaseRepository{

    public function __construct() {
        $this->table = "sliders";
    }

    public function find($id) {
        $slider = $this->baseFind($id);

        $sliderObject = new Slider();
        $sliderObject->setId($slider['id']);
        $sliderObject->setPosition($slider['position']);
        $sliderObject->setTitle($slider['title']);
        $sliderObject->setSubTitle($slider['subtitle']);
        $sliderObject->setIntroduction($slider['introduction']);
        $sliderObject->setLink($slider['link']);
        $sliderObject->setFilePath($slider['file_path']);

        return $sliderObject;
    }

    public function changePosition($newPosition , $id) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        $sql = "UPDATE sliders SET position = ? WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ii",
        $newPosition,
        $id
        );
        $stmt->execute();
        $stmt->close();
    }

    public function ordenarArray($slidersObjects) {
        function ordSliders($sliderObject1 , $sliderObject2) {
            if ($sliderObject1->getPosition() == $sliderObject2->getPosition()) {
                return 0;
            }
            return ($sliderObject1->getPosition() < $sliderObject2->getPosition()) ? -1 : 1;
        }

        usort($slidersObjects , 'ordSliders');
        return $slidersObjects;
    }
}