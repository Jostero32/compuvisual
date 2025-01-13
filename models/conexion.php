<?php
class Conexion{
    public function conectar(){
        $servername ="mysql-compuvisual";
        $username = "root";
        $password = "1234";
        $db = "cuarto";
        $conn = mysqli_connect($servername,$username,$password,$db);
        if (!$conn) {
            echo"Error de conexion ".mysqli_connect_error();
        }
        else{
            return $conn;
        }        
    }
}

?>