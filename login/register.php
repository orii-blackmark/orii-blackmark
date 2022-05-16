<?php
include 'process.php';

//error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("location: login.php");
}

if (isset($_POST['submit'])) {
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $DOB=$_POST['DOB'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']);

    if ($password==$cpassword) {
        $sql="SELECT * FROM users WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        if (!$result->num_rows>0) {
            $sql = "INSERT INTO users (fullname,username,DOB,email,password) 
            VALUES('$fullname','$username','$DOB','$email','$password')";
           $result=mysqli_query($conn,$sql);  
         if ($result) {
          echo "<script>alert('wow! User registration completed.')</script>";
            $fullname="";
            $username="";
            $DOB="";
            $email="";
            $_POST['password']="";
            $_POST['cpassword']="";
    }else {
        echo "<script>alert('Ooops! something went wrong.')</script>";
    }  
        } else {
            echo "<script>alert('Ooops! Email already exist.')</script>";
        }
          
    }else{
        echo "<script>alert('Password not matched.')</script>";
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
        <h2>Register</h2>
        <form action="" method="POST">

            <label>Full Name</label>
            <input type="text" name="fullname" id="user1" placeholder="enter your fullname" required>
            <br>
            <br>
            <label>UserName</label>
            <input type="text" name="username" id="user2" placeholder="Enter your Username" required>
            <br>
            <br>
            <label>Email</label>
            <input type="email" name="email" id="mail" placeholder="enter your email" required>
            <br>
            <br>
            <label>Date of Birth</label>
            <input type="date" name="DOB" id="date" required>
            <br>
            <br>
            <label>Password:</label>
            <input type="password" name="password" id="pass1" placeholder="enter your password" required>
            <br> <br>
            <label>Confirm Password:</label>
            <input type="password" name="cpassword" id="pass2" placeholder="enter your password" required>
            <br> <br>
            <input type="submit" name="submit" id="btn" value="Register">
            <p>Have an account? <a href="login.php">Login</a> </p>
        </form>
    </div>
</body>

</html>