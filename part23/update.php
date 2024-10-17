<?php

include 'db_connect.php';

//Update

$id=36;
$email='test222@gamil.com';

$sql="UPDATE users SET email=:email WHERE id=:id ";

$stmt=$conn->prepare($sql);

$stmt->bindParam(':id',$id);
$stmt->bindParam(':email',$email);

if ($stmt->execute()){
    echo 'Operation successful!';
}else{
    echo 'Operation failed';
}
