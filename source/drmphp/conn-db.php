<?php
$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="csv_db 6";

try{
    $conn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
   // echo "success";
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}