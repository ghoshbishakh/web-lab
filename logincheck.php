 <?php
 $host = 'localhost';
 $db = 'student';
 $user = 'root';
 $password = 'root';
 $con = new mysqli($host,$user,$password) or die('connection failed');
 //echo "connection established";


 mysqli_select_db($con,$db);


 session_start(); 
 if($_SERVER["REQUEST_METHOD"]  ==  "POST") {
 	$username=$_POST['username']; 
 	$password=$_POST['password'];

 	$pass_hash=sha1($password);

 	$str = sprintf("select * from user where username='%s' and pass='%s'", $username, $pass_hash);
	
	$res = mysqli_query($con, $str);
 	if(mysqli_num_rows($res)>=1)
 	{
 		echo "Login Successful";
 		$_SESSION['login_user']=$username;
 		header("location:  profile.php");
 	}
 	else
 	{
 		echo "Invalid Username or Password";
 		header("location:  login.php?remark_login=failed");

 	}
} 
?>
