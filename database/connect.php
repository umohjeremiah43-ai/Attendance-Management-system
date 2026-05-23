<?php

$host = "localhost";
$dbname = "school_attendance_system";
$username = "root";
$password = "";

try{

    $dbh = new PDO(
        "mysql:host=$host;dbname=$dbname",        $username,        $password    );

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    die("Connection failed: " . $e->getMessage());
}





?>