<?php
$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'root';
$con = new mysqli($host,$user,$password) or die('connection failed');
// echo "connection established";


mysqli_select_db($con,$db);


session_start(); 
if($_SERVER["REQUEST_METHOD"]  ==  "GET" && isset($_SESSION['admin_user'])) {
    $username=$_GET['username']; 


    $str = sprintf("update user set activated=1 where username='%s'", $username, $password);
    // echo $str;
    $res = mysqli_query($con, $str);
    if($res)
    {
        echo "ACTIVATION SUCCESSFUL.. redirecting";
        // header("location:  adminprofile.php");
        header( "refresh:3;url=adminprofile.php" );
    }
    else
    {
        echo "Invalid Username or Password";
        // header("location:  admin_login.php?message=failed");

    }
} 
?>
