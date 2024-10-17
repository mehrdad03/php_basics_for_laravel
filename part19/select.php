<?php


include 'db_connect.php';

//Select:
//SELECT column_name(s) FROM table_name
//SELECT * FROM table_name

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows>0){

    while ($row=$result->fetch_assoc()){
        echo '<pre>';
        print_r($row['email']);
        echo '<pre>';
    }

}else{
    echo '0 results';
}









