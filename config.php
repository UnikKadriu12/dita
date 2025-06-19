<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "crud1";

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
}catch(Exception $e){
    echo "Something went wrong!"; 
}