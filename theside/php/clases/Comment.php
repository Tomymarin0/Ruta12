<?php

class Comment {
    private $id;
    private $username;
    private $userEmail;
    private $description;
    private $fechaRealizado;
    private $response;
    private $status;
    private $sectionId;

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

    public function setUserEmail($newUserEmail) {
        $this->userEmail = $newUserEmail;
    }

    public function getUserEmail() {
        return $this->userEmail;
    }

    public function setDescription($newDescription) {
        $this->description = $newDescription;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setFechaRealizado($newFechaRealizado) {
        $this->fechaRealizado = $newFechaRealizado;
    }

    public function getFechaRealizada() {
        return $this->fechaRealizado;
    }
    
    public function setResponse($newResponse) {
        $this->response = $newResponse;
    }

    public function getResponse() {
        return $this->response;
    }

    public function setStatus($newStatus) {
        $this->status = $newStatus;
    }

    public function getStatus() {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getSectionId()
    {
        return $this->sectionId;
    }

    /**
     * @param mixed $sectionId
     */
    public function setSectionId($sectionId)
    {
        $this->sectionId = $sectionId;
    }



}