<?php
require_once __DIR__. "/../services/Mysql.php";
require_once __DIR__ . "/../services/Validator.php";
require_once __DIR__ . "/../config.php";

class Slider {
    private $id;
    private $position;
    private $title;
    private $subtitle;
    private $introduction;
    private $link;
    private $filePath;

    // repository directy

    public function save() {
        if($errorMessage = $this->validate()) return $errorMessage;
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = 
        "UPDATE sliders SET title = ?, subtitle = ? , introduction = ?, link = ?, file_path = ? 
        WHERE sliders.id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("sssssi",$this->title,$this->subtitle,$this->introduction,$this->link,$this->filePath,$this->id);
        $stmt->execute();
        $stmt->close();
    }

    private function validate() {
        $validator = new Validator();
        if(!$validator->validateText($this->title, SHORT_TEXT)) 
        return "El titulo debe contener entre 5 y ". SHORT_TEXT . " caracteres . Actualmente contiene " . strlen($this->title);
        if(!$validator->validateText($this->subtitle, SHORT_TEXT)) 
        return "El subtitulo debe contener entre 5 y ". SHORT_TEXT . " caracteres . Actualmente contiene " . strlen($this->title);
        if(!$validator->validateText($this->introduction,VERY_LARGE_TEXT)) 
        return "la introduccion debe contener entre 5 y ". VERY_LARGE_TEXT . " caracteres . Actualmente contiene " . strlen($this->introduction);
        if(!$validator->validateUrl($this->link))
        return "El link debe tener entre 5 y 1000 caracteres y ser un link valido";
    }

    // repository

    public function searchAllSliders() {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT * FROM sliders";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $sliders = [];

        while($slider = $result->fetch_assoc()) {
            $sliders[] = $slider;
        }
        $stmt->close();

        return $sliders;
    }

    public function searchSlider($position) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT * FROM sliders WHERE position = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i",$position);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // al ser un unico position por slieder no hace falta que recorramos todas las filas 
        $slider = $result->fetch_assoc();
        $stmt->close();

        $this->setId($slider["id"]);
        $this->setPosition($slider["position"]);
        $this->setTitle($slider["title"]);
        $this->setIntroduction($slider["introduction"]);
        $this->setLink($slider["link"]);
        $this->setFilePath($slider["file_path"]);

        return $slider;
    }

    // Getters & Setters

    public function setId($newId) {
        $this->id = $newId;
    }

    public function getId() {
        return $this->id;
    }

    public function setPosition($newPosition) {
        $this->position = $newPosition;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setTitle($newTitle) {
        $this->title = $newTitle;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setSubTitle($newSubTitle) {
        $this->subtitle = $newSubTitle;
    }

    public function getSubTitle() {
        return $this->subtitle;
    }

    public function setIntroduction($newIntroduction) {
        $this->introduction = $newIntroduction;
    }

    public function getIntroduction() {
        return $this->introduction;
    }

    public function setLink($newLink) {
        $this->link = $newLink;
    }

    public function getLink() {
        return $this->link;
    }

    public function setFilePath($filePath) {
        $this->filePath = $filePath; 
    }

    public function getFilePath() {
        return $this->filePath;
    }
}
// echo "AAA";
// $nose = new Slider();
// $slider = $nose->searchSlider(1);
// echo $nose->getLink();
// echo $nose->save();