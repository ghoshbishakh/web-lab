<?php

	$host = 'localhost';
	$db = 'student';
	$user = 'root';
	$password = '';
	$con = new mysqli($host,$user,$password) or die('connection failed');
	echo "connection established";

	
    mysqli_select_db($con,$db); 
	if(isset($_POST['firstname'])&& isset($_POST['lastname']) && isset($_POST['reg']) && isset($_POST['roll']) && isset($_POST['dob'])&& isset($_POST['branch']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['gender'])&& isset($_POST['password']))
    {
		$str = "insert into register(firstname,midname,lastname,reg,roll,dob,branch,email,contact,gender,password) VALUES ('$_POST[firstname]','$_POST[midname]','$_POST[lastname]','$_POST[reg]','$_POST[roll]','$_POST[dob]','$_POST[branch]','$_POST[email]','$_POST[contact]','$_POST[gender]','$_POST[password]')";
  
		if($con->query($str) === TRUE)
		{
		  echo "<br> new record added successfully";
		}
		else
		{
		  echo "error creating record".$str."<br>".$con->error; 
		}
		mysqli_close($con);
	}
	else
		echo "<br>error insertion"; 


?>