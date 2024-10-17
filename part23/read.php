<?php

include 'db_connect.php';

//Read

$sql="SELECT * FROM users";
$stmt=$conn->prepare($sql);


if ($stmt->execute()){

    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row){
        echo '<pre>';
        print_r($row['user_name']);
        echo '<pre>';
    }
}