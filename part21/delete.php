<?php


include 'db_connect.php';

//Delete:

//DELETE FROM table_name WHERE some_column = some_value

$sql = "DELETE FROM users WHERE id=3";
$result = $conn->query($sql);

if ($result === true) {

    echo 'record deleted successfully';

} else {
    echo 'Error deleting record:' . $conn->error;
}

$conn->close();






