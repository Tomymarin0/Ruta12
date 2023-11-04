<?php
require_once __DIR__. "/../clases/Comment.php";
require_once __DIR__. "/../repositories/ResponseRepository.php";
require_once __DIR__. "/../repositories/BaseRepository.php";
require_once __DIR__. "/../services/Mysql.php";

class CommentRepository extends BaseRepository{

    public function __construct() {
        $this->table = "comments";
        $this->identifier = "comment_id";
    }

    public function find($id) {
        $responseRepository = new ResponseRepository();
        $comment = $this->baseFind($id);
        $response = $responseRepository->findAllAsociate($this->identifier , $id);

        if(empty($comment)) return;
        $commentObject = new Comment();
        $commentObject->setId($comment['id']);
        $commentObject->setUsername($comment['username']);
        $commentObject->setUserEmail($comment['user_email']);
        $commentObject->setDescription($comment['comment']);
        $commentObject->setFechaRealizado(date("d-m-Y H:i:s", strtotime($comment['fecha_realizado'])));
        $commentObject->setStatus($comment['id_status']);
        $commentObject->setSectionId($comment['section_id']);
        $commentObject->setResponse($response);

        return $commentObject;
    }

    public function getTimeDiff($commentObject){
        $momento_recibido = intval(abs(strtotime("now") - strtotime($commentObject->getFechaRealizada()))/(60*60));
        if ($momento_recibido < 24)
            return  "Hace " .$momento_recibido ." Horas";
        else
            return "Hace " . intval($momento_recibido/24) . " Días";
    }

    public function getPreMessage($commentObject){
        if (strlen( $commentObject->getDescription()) > 50){
            return substr($commentObject->getDescription(),0,50) . "...";
        }
        else
            return $commentObject->getDescription();
    }

    public function persist_comment($username,$email,$descripcion,$section){

        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        $sql = "INSERT INTO $this->table VALUES 
            (null,
            ? ,
            ? ,
            ? , 
            ? , 
            1 ,
            ?)";

        $stmt = $mysqli->prepare($sql);
        if($stmt == false)  echo "Falló la preparación: (".$mysqli->errno.")" .$mysqli->error;
        $stmt->bind_param("ssssi",
            $username,
            $email,
            $descripcion,
            date('Y-m-d H:i:s'),
            $section
        );
        $stmt->execute();
        $stmt->close();

        return true;
    }

    public function update($id,$status){

        $mysql = new Mysql();
        $mysqli = $mysql->connect();
        $sql = "UPDATE $this->table SET 
            id_status = ? WHERE id = ?";

        $stmt = $mysqli->prepare($sql);
        if($stmt == false)  echo "Falló la preparación: (".$mysqli->errno.")" .$mysqli->error;
        $stmt->bind_param("ii",
            $status,
                    $id
        );
        $stmt->execute();
        $stmt->close();

        return true;
    }

    public function delete($id){

        try {
            $mysql = new Mysql();
            $mysqli = $mysql->connect();
            $sql = "DELETE from $this->table 
            WHERE id = ?";

            $stmt = $mysqli->prepare($sql);
            if ($stmt == false) echo "Falló la preparación: (" . $mysqli->errno . ")" . $mysqli->error;
            $stmt->bind_param("i",
                $id
            );
            $stmt->execute();
            $stmt->close();

            return true;
        }catch (Exception $exception){
            echo "Ocurrió un error";
        }
    }
}