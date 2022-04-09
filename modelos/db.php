<?php

class Db{

    public static function getConnection(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=produtos","root","Higor120783");
            return $conn;
        }
        catch(PDOException $e){
            echo "Error: ".$e->getMessage()." Código: ".$e->getCode();
        }
    }
}

?>