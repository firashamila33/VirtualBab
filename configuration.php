<?php
class configuration{
    function getConnexion(){
        $servername="localhost";
        $dbname="bab";
        $username="root";
        $password="";
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        return $conn;
    }
}

?>