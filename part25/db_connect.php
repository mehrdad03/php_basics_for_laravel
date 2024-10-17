<?php

//PDO (PHP Data Objects)

$hostName = 'localhost';
$username = 'root';
$password = '';
$database = 'php_basics_for_laravel';
$dsn = "mysql:host=$hostName;dbname=$database";


try {

    $conn = new PDO($dsn, $username, $password);
    //echo 'Connection successful!';

} catch (PDOException $e) {

    echo 'Connection failed:'.$e->getMessage();

}


