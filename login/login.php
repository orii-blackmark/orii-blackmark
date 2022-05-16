<?php

include 'process.php';

session_start();

if (isset($_SESSION['username'])){
    header("location: welcome.php");
}  

if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if ($result->num_rows>0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['username']=$row['username'];
        header("Location: welcome.php");
    }else{
        echo "<script>alert('Ooops! username or password incorrect.')</script>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lets link the database with login system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="POST">

            <label>Username:</label>
            <input type="text" name="username" id="user" placeholder="enter your username">
            <br>
            <br>
            <label>Password:</label>
            <input type="password" name="password" id="pass" placeholder="enter your password">
            <br> <br>
            <input type="submit" name="submit" id="btn" value="Login">
            <p class="text-a">Don't have an account? <a href="register.php">register</a> </p>
        </form>
    </div>
</body>

</html>