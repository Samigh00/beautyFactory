<?php
class Connexion
{
    public $cnx;
    function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "beautyfactory";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $this->cnx=$conn;

    }
}
?>