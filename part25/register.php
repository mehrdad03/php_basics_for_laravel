<?php
session_start();


include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $userName=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $language=$_POST['language'];

    $sql='INSERT INTO users (user_name,language,password) VALUES (:user_name,:language,:password)';

    $stmt=$conn->prepare($sql);
    $stmt->bindParam('user_name',$userName);
    $stmt->bindParam('language',$language);
    $stmt->bindParam('password',$password);

    if ($stmt->execute()){

        $_SESSION['userName']=$userName;
       /* $_SESSION['language']=$language;*/
        $_SESSION['password']=$password;

        setcookie('language',$language,time()+(86400*30),'/');

      header('Location: welcome.php');
    }else{
        echo 'Registration failed!';
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Register</h2>
            <form method="post" action="register.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="language">Choose Language:</label>
                    <select class="form-control" id="language" name="language" required>
                        <option value="en">English</option>
                        <option value="fa">Farsi</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <p class="text-center mt-3">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</div>
</body>
</html>
