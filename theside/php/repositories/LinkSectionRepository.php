<?php
require_once __DIR__. "/../clases/LinkSection.php";
require_once __DIR__. "/../repositories/BaseRepository.php";

class LinkSectionRepository extends BaseRepository{

    public function __construct() {
        $this->table = "link_section";
    }

    public function find($id) {
        $linkSection = $this->baseFind($id);

        $linkSectionObject = new LinkSection();
        $linkSectionObject->setId($linkSection['id']);
        $linkSectionObject->setLink($linkSection['link']);
        $linkSectionObject->setText($linkSection['text']);

        return $linkSectionObject;
    }
}