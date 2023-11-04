<?php


class Response {
    private $id;
    private $username;
    private $name;
    private $description;
    private $fechaRealizada;


    // Getters & Setters

    public function setId($newId) {
        $this->id = $newId;
    }

    public function getId() {
        return $this->id;
    }

    public function setUsername($newUsername) {
        $this->username = $newUsername;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setName($newName) {
        $this->name = $newName;
    }

    public function getName() {
        return $this->name;
    }

    public function setDescription($newDescription) {
        $this->description = $newDescription;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setFechaRealizada($newFechaRealizada) {
        $this->fechaRealizada = $newFechaRealizada;
    }

    public function getFechaRealizada() {
        return $this->fechaRealizada;
    }
}