<?php


include 'db_connect.php';

//Update:

//UPDATE table_name SET column1=value, column2=value2,... WHERE some_column=some_value


$sql = "UPDATE users SET email='test232@gmail.com' , user_name='meh31231rdad' where id=3 ";
$result = $conn->query($sql);

if ($result === true) {
    echo 'Record updated successfully';
} else {
    echo 'Error updating record":' . $conn->error;
}

$conn->close();






