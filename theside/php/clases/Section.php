<?php


class Section {
    private $id;
    private $title;
    private $introduction;
    private $fileSections;
    private $linkSection;
    private $comments;
    private $textBlockA;
    private $textBlockB;
    private $feacturedBlockA;
    private $feacturedBlockB;
    private $fechaRealizada;
    private $introductionLink;

    // Getters & Setters
    
    public function setId($newId) {
        $this->id = $newId;
    }

    public function getId() {
        return $this->id;
    }
    
    public function setTitle($newTitle) {
        $this->title = $newTitle;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setIntroduction($newIntroduction) {
        $this->introduction = $newIntroduction;
    }

    public function getIntroduction() {
        return $this->introduction;
    }

    public function setFileSections($newSectionsFilePaths) {
        $this->fileSections = $newSectionsFilePaths;
    }

    public function getFileSections() {
        return $this->fileSections;
    }

    public function setLinkSection($newLinkSection) {
        $this->linkSection = $newLinkSection;
    }

    public function getLinkSection() {
        return $this->linkSection;
    }

    public function setComments($newComments) {
        $this->comments = $newComments;
    }

    public function getComments() {
        return $this->comments;
    }

    public function setTextBlockA($newTextBlockA) {
        $this->textBlockA = $newTextBlockA;
    }

    public function getTextBlockA () {
        return $this->textBlockA;
    }

    public function setTextBlockB($newTextBlockB) {
        $this->textBlockB = $newTextBlockB;
    }

    public function getTextBlockB() {
        return $this->textBlockB;
    }

    public function setFeacturedBlockA($newFeacturedBlockA) {
        $this->feacturedBlockA = $newFeacturedBlockA;
    }

    public function getFeacturedBlockA() {
        return $this->feacturedBlockA;
    }

    public function setFeacturedBlockB($newFeacturedBlockB) {
        $this->feacturedBlockB = $newFeacturedBlockB;
    }

    public function getFeacturedBlockB() {
        return $this->feacturedBlockB;
    }


    public function setFechaRealizada($newFechaRealizada) {
        $this->fechaRealizada = $newFechaRealizada;
    }

    public function getFechaRealizada() {
        return $this->fechaRealizada;
    }

    public function setIntroductionLink($newIntroductionLink) {
        $this->introductionLink = $newIntroductionLink;
    }
    
    public function getIntroductionLink() {
        return $this->introductionLink;
    }
}