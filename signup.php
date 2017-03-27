<?php
	
	$host = 'localhost';
	$db = 'student';
	$user = 'root';
	$password = 'root';
	$con = new mysqli($host,$user,$password) or die('connection failed');
	echo "connection established";

	
    mysqli_select_db($con,$db); 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $reg = $_POST['reg'];
    $branch = $_POST['branch'];
    $fullroll = $_POST['fullroll'];
    $contactnumber = $_POST['contactnumber'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $pass_hash = sha1($password);

    $query_str = sprintf("insert into user(username,email,fullname,regno,branch,rollno,contact,gender,dob,pass,activated) VALUES ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','false')",$username,$email,$fullname,$reg,$branch,$fullroll,$contactnumber,$gender,$dob,$pass_hash);


    if($con->query($query_str) === TRUE)
	{
	  echo "<br><h2> Your record has been added successfully.. Redirecting to REgistration Page in 2 seconds</h2>";
      session_start(); 
      $_SESSION['login_user']=$username;
	  header( "refresh:2;url=profile.php" );
	}
	else
	{
	  echo "error creating record".$query_str."<br>".$con->error; 
	}
	mysqli_close($con);
	
	


?>