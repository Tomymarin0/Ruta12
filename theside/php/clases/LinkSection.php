<?php


class LinkSection {
    private $id;
    private $link;
    private $text;

    // Getters & Setters
    
    public function setId($newId) {
        $this->id = $newId;
    }

    public function getId() {
        return $this->id;
    }

    public function setLink($newLink) {
        $this->link = $newLink;
    }

    public function getLink() {
        return $this->link;
    }

    public function setText($newText) {
        $this->text = $newText;
    }

    public function getText() {
        return $this->text;
    }
}