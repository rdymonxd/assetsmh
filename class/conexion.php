<?php
    class ApptivaDB{
        private $host = "localhost";
        private $user = "root";
        private $password = "y2k11sdf1xd.*";
        private $db = "activosqr";
        public $conexion;
        public function __construct(){
            $this->conexion = new mysqli($this->host,$this->user,$this->password,$this->db) or die(mysql_error());
            $this->conexion->set_charset("utf8");
        }

        //insertar
        public function insert($table, $data){
            $result = $this->conexion->query("INSERT INTO $table VALUES (null,$data)") or die($this->conexion->error);
            if($result)
                return true;
            return false;
        }

        //delete
        public function delete($table, $condition){
            $result = $this->conexion->query("DELETE FROM $table WHERE $condition") or die($this->conexion->error);
            if($result)
                return true;
            return false;
        }

        //update
        public function update($table,$fields,$condition){
            $result = $this->conexion->query("UPDATE $table SET $fields WHERE $condition") or die($this->conexion->error);
            if($result)
                return true;
            return false;
        }

        public function search($table, $condition){
            $result = $this->conexion->query("SELECT * FROM $table WHERE $condition") or die($this->conexion->error);
            if($result)
                return $result->fetch_all(MYSQLI_ASSOC);
            return false;
        }


    }

?>