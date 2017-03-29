<?php
$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'root';
$con = new mysqli($host,$user,$password) or die('connection failed');
// echo "connection established";


mysqli_select_db($con,$db);


session_start(); 
if($_SERVER["REQUEST_METHOD"]  ==  "POST") {
    $username=$_POST['username']; 
    $password=$_POST['password'];


    $str = sprintf("select * from admin where username='%s' and password='%s'", $username, $password);
    // echo $str;
    $res = mysqli_query($con, $str);
    if(mysqli_num_rows($res)>=1)
    {
        echo "Login Successful";
        $_SESSION['admin_user']=$username;
        header("location:  adminprofile.php");
    }
    else
    {
        echo "Invalid Username or Password";
        header("location:  admin_login.php?message=failed");

    }
} 
?>
