<?php
include 'db_connect.php';

//Delete

$id=36;

$sql="DELETE FROM users WHERE id=:id";
$stmt=$conn->prepare($sql);

$stmt->bindParam(':id',$id);

if ($stmt->execute()){
    echo 'Operation successful!';
}else{
    echo 'Operation failed';
}

