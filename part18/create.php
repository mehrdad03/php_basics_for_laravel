<?php


include 'db_connect.php';

//Create:
//INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);

$sql = "INSERT INTO users (user_name,email) VALUES 
     ('john_doe', 'john.doe@example.com'),
    ('jane_smith', 'jane.smith@example.com'),
    ('bill_jones', 'bill.jones@example.com')";


if ($conn->query($sql) === TRUE) {
    echo "Records inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();




