<?php
include_once __DIR__ ."/../config.php";
class FileUploader {
    private $maxSize;
    private $extensionesPermitidas;

    public function __construct() {
        $this->maxSize = MAX_SIZE;
    }

    public function addFile($file , $oldPath = null , $folder = SLIDERS_PATH) {
        $response = [];
        $response["error"] = true;
        echo "<script>console.log('hola')</script>";
        if(!$this->validateSize($file)) {
            $response["message"] = "Tamaño invalido del archivo " . $file['name'] . ", el maximo tamaño permitido para archivos de es de 20MB";
            return $response;
        }
        if(!$this->validateExtension($file)) {
            $response["message"] = "Archivo " . $file['name'] . " invalido , solo se permiten archivos de tipo video o imagen";
            return $response;
        } 

        $fileTmp = $file['tmp_name'];
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $newPath = $folder . '/' . uniqid() . '.' . $ext;
        echo "<script>console.log('hola')</script>";

        if(!move_uploaded_file($fileTmp, "../../" . $newPath)) {
            $response["message"] = "Error desconocido";
            return $response;
        }

        if($oldPath) $this->deletePath("../../" . $oldPath);
        $response["error"] = false;
        $response["newPath"] = $newPath;
        return $response;
    }

    private function validateSize($file) {
        return $file['size'] <= $this->maxSize;
    }

    private function validateExtension($file) {
        return strstr($file['type'],'image/') || strstr($file['type'],'video/');
    }

    public function deletePath($path) {
        unlink($path);
    }

    public function isImage($path) {
        $mime = mime_content_type($path);
        return strstr($mime , 'image/');
    }
}