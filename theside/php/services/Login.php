<?php
require_once __DIR__ ."/Mysql.php";
require_once __DIR__ . "/obtenerHost.php";

class Login {


    public function createSesion($username , $password) {
        $user = $this->searchUser($username , $password);
        if(empty($user)) return false;
        session_start();
        $_SESSION["usuario"] = $username;
        $_SESSION["name"] = $user["name"];
        return true;
    }

    public function deleteSesion() {
        session_start();
        session_destroy();
        header("Location: " . getHost() . "/admin/login/index.php");
        exit();
    }

    private function searchUser($username , $password) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $encryptedPassword = md5($username . KEY . $password);

        $sql = "SELECT * FROM admins WHERE username = ? AND password = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('ss',$username , $encryptedPassword);
        $stmt->execute();
        $result = $stmt->get_result();
        
        // al ser un user unico por username no hace falta que recorramos todas las filas 
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }
}

