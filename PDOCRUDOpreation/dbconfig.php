<?php

$host = "localhost";
$dbname = "pdocrud";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    $conn -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo "sucssfully connection";


} catch(PDOException $e) {

    echo  $e;

}


?>