<?php


include 'db_connect.php';

//Create

$name='mehrdad';
$email='test@gmail.com';

$sql="INSERT INTO users (user_name,email) VALUES (:name ,:email) ";

$stmt=$conn->prepare($sql);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);

if ($stmt->execute()){
    echo 'Operation successful!';
}else{
    echo 'Operation failed';
}






