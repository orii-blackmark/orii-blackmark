<?php

include 'process.php';

session_start();

if (isset($_SESSION['username'])){
    header("location: welcome.php");
}  

if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM details WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if ($result->num_rows>0){ $row=mysqli_fetch_assoc($result);
        $_SESSION['username']=$row['username']; header("Location: welcome.php");
        }else{ echo "
        <script>
          alert('Ooops! username or password incorrect.');
        </script>
        "; } } ?>