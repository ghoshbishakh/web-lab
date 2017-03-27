<?php

	$host = 'localhost';
	$db = 'student';
	$user = 'root';
	$password = 'root';
	$con = new mysqli($host,$user,$password) or die('connection failed');
	//echo "connection established";

	
    mysqli_select_db($con,$db);
	$userinput = $_POST['username'];
    $str = "select * from user where username='".$userinput."'";
	//echo $str;
	$res = mysqli_query($con, $str);
	if(mysqli_num_rows($res)>=1)
   {
    echo "exists";
   }
 else
    {
	echo "not_exists";
    }
	/*if($con->query($str) === TRUE)
	{
	  echo "exists";
	  
	}
	else
	{
	   echo "error".$str."<br>".$con->error;
	}*/
	mysqli_close($con);


?>