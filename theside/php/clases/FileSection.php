<?php

class FileSection {
    private $id;
    private $position;
    private $filePath;

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

    public function setFilePath($filePath) {
        $this->filePath = $filePath; 
    }

    public function getFilePath() {
        return $this->filePath;
    }
}