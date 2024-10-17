<?php

session_start();


include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $userName=$_POST['username'];
    $password=$_POST['password'];

    $sql='SELECT * FROM users WHERE user_name=:user_name';
    $stmt=$conn->prepare($sql);
    $stmt->bindParam('user_name',$userName);
    $stmt->execute();

    {
        if ($stmt->rowCount()>0){
            $user=$stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($password,$user['password'])){


                $_SESSION['userName']=$userName;
            /*    $_SESSION['language']=$user['language'];*/
                $_SESSION['password']=$password;

                header('Location:welcome.php');

            }else{
                echo "Invalid username or password.";
            }


        }else{
            echo "Invalid username or password.";

        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Login</h2>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
            <p class="text-center mt-3">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</div>
</body>
</html>
