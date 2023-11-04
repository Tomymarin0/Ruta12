<?php
require_once __DIR__ ."/../config.php";

class Validator {

    public function validateText($text , $large) {
        return $this->validateBetween($text , $large);
    }

    public function validateEmail($email) {
        return $this->validateBetween($email , SHORT_TEXT) && filter_var($email , FILTER_VALIDATE_EMAIL);
    }

    public function validateUrl($url) {
        return $this->validateBetween($url , MEDIUM_TEXT) && filter_var($url , FILTER_VALIDATE_URL);
    }

    private function validateBetween($text ,$max , $min = 5) {
        return strlen($text) < $max && strlen($text) >= $min;
    }
}