<?php

include 'db_connect.php';

//HTTP (Hypertext Transfer Protocol)

//$_GET : http://example.com/form.php?name=John&email=john@example.com

//$_POST :
//print_r($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

/*if (isset($_POST['agree'])) {
    $agree = 1;
} else {
    $agree = 0;
}*/
$agree = ($_POST['agree'] == 'on') ? 1 : 0;


$sql = "INSERT INTO users (name,email,age,phone,gender,agree)

VALUES (:name ,:email,:age ,:phone,:gender,:agree) ";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':age', $age);
$stmt->bindParam(':phone', $phone);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':agree', $agree);

if ($stmt->execute()) {
    echo 'Operation successful!';
} else {
    echo 'Operation failed';
}



