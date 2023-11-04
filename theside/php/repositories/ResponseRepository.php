<?php
require_once __DIR__. "/../clases/Response.php";
require_once __DIR__. "/../repositories/BaseRepository.php";

class ResponseRepository extends BaseRepository{

    public function __construct() {
        $this->table = "response";
    }

    public function find($id) {
        $response = $this->baseFind($id);
        
        $responseObject = new Response();
        $responseObject->setId($response['id']);
        $responseObject->setUsername($response['username']);
        $responseObject->setName($response['name']);
        $responseObject->setDescription($response['description']);
        $responseObject->setFechaRealizada(date("d-m-Y H:i:s", strtotime($response['fecha_realizada'])));

        return $responseObject;
    }

    public function persist_response($descripcion,$comment_id,$username,$name){


        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        $sql = "INSERT INTO $this->table VALUES 
            (null,
            ? ,
            ? ,
            ? , 
            ? , 
            ?)";

        $stmt = $mysqli->prepare($sql);
        if($stmt == false)  echo "Falló la preparación: (".$mysqli->errno.")" .$mysqli->error;
        $stmt->bind_param("ssssi",
            $username,
            $name,
            $descripcion,
            date('Y-m-d H:i:s'),
            $comment_id
        );
        $stmt->execute();
        $stmt->close();

        return true;
    }
}