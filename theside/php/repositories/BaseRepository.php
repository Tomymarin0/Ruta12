<?php
require_once __DIR__. "/../services/Mysql.php";

class BaseRepository {

    protected $table;
    protected $identifier;

    public function findAll($order = NULL) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        if(empty($order))
        $sql = "SELECT id FROM $this->table";
        else $sql = "SELECT id FROM $this->table ORDER BY $order DESC";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $resultObject = [];

        while($resultFetch = $result->fetch_assoc()) {
            $resultObject[] = $this->find($resultFetch['id']);
        }
        $stmt->close();

        return $resultObject;
    }

    public function findAllAsociate($identifier , $id){
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT id FROM $this->table WHERE $identifier = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $resultObject = [];

        while($resultFetch = $result->fetch_assoc()) {
            $resultObject[] = $this->find($resultFetch['id']);
        }
        $stmt->close();

        return $resultObject;
    }

    public function baseFind($id) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();
         
        $resultFetch = $result->fetch_assoc();
        $stmt->close();

        return $resultFetch;
    }

    public function delete($id) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "DELETE FROM $this->table WHERE id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("i",$id);
        $stmt->execute();
    }

    public function findPagination($page , $order = NULL) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $limit = RECORDS_LIMIT;
        $paginationStart = ($page - 1) * $limit;

        if(empty($order))
            $sql = "SELECT * FROM $this->table LIMIT $paginationStart, $limit";
        else $sql = "SELECT * FROM $this->table ORDER BY $order DESC LIMIT $paginationStart, $limit";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $resultObject = [];

        while($resultFetch = $result->fetch_assoc()) {
            $resultObject[] = $this->find($resultFetch['id']);
        }
        $stmt->close();

        return $resultObject;
    }
 
    private function numberOfRecords() {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT count(id) AS id FROM $this->table";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $resultFetch = $result->fetch_assoc();
        $stmt->close();

        return $resultFetch['id'];
    }

    public function totalPages() {
        return $this->numberOfRecords() / RECORDS_LIMIT;
    }

    public function previousRecord($id) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT * FROM $this->table WHERE id = (SELECT MAX(id) FROM $this->table WHERE id < $id);";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $resultFetch = $result->fetch_assoc();
        $stmt->close();

        if(!empty($resultFetch['id']))
            return $resultFetch['id'];
    }

    public function nextRecord($id) {
        $mysql = new Mysql();
        $mysqli = $mysql->connect();

        $sql = "SELECT * FROM $this->table WHERE id = (SELECT MIN(id) FROM $this->table WHERE id > $id);";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        $resultFetch = $result->fetch_assoc();
        $stmt->close();
        
        if(!empty($resultFetch['id']))
            return $resultFetch['id'];
    }
}