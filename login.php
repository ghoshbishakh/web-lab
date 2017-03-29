<?php
    $host = 'localhost';
    $db = 'student';
    $user = 'root';
    $password = 'root';
    $con = new mysqli($host,$user,$password) or die('connection failed');
    // echo "connection established";
    mysqli_select_db($con,$db);

    session_start();

    if (isset($_SESSION['login_user'])){
        header("location:  profile.php");
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div id="heading">
    <img id="nit-logo" src="images/nit.jpg" alt="NIT LOGO">
    <p><b>STUDENT INFORMATION SYSTEM</b></p>
    <p><b>NATIONAL INSTITUTE OF TECHNOLOGY, DURGAPUR</b></p>
    </div>

    <div class="navigation_bar">
        <div id="navr">
            <ul>
                <li> <a href="index.html">Home</a></li>
                <li> <a href="#about">About</a></li>
                <li> <a href="#academics">Academics</a></li>
                <li> <a href="signup1.php" target="blank">Student Sign Up</a></li>
                <li class="dropdown">
                    <a class="dropbtn">Log In</a>
                    <div class="dropdown-content">
                        <a href="admin_login.php" target="blank">Administrator Login</a>
                        <a href="login.php" target="blank">Student Login</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>

	<div class="content">
	<div id="signup-wrapper">
		<div style="float:left; width:50%;">
		</div>
		<div style="float:left; width:50%;">
		</div>
        <?php
            if(isset($_GET["message"])){

                $msg = $_GET["message"];
                if($msg == "failed"){
                    $msg = "Incorrect username or password";
                }
                if($msg == "notloggedin"){
                    $msg = "Please log in first";
                }
                echo "<div class='message'>".$msg."</div>";
            
            }
        ?>
		<form method="post" action="logincheck.php">
			<center>
				<h1>Student Login</h1>
			</center>
			<label>Username: </label>
			<input class="text-input" type="text" name="username" placeholder="username">
			<br><br><label>Password: </label>
			<input class="text-input" type="password" name="password" placeholder="Password">
			<br><br>
			<center><input id="submit-button" type="submit" name="submit" value="Submit "></center>
		</form>
		<center>
		<a href="#">Forgot your Password?</a>
		</center>
	</div>
    </div>
	

</body>
</html>
