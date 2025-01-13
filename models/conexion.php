<?php
class Conexion{
    public function conectar(){
        $servername ="mysql-iomk";
        $username = "mysql";
        $password = "Hrg52t4DDD6NhP/i12CgYV4Eg2l0YiTNt4W+vqZCSMA=";
        $db = "mysql";
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