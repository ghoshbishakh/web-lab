<?php
    $host = 'localhost';
    $db = 'student';
    $user = 'root';
    $password = 'root';
    $con = new mysqli($host,$user,$password) or die('connection failed');
    // echo "connection established";
    mysqli_select_db($con,$db);

    session_start();
    
    if (!isset($_SESSION['admin_user'])){
        header("location:  admin_login.php?message=notloggedin");
    }


?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>
<body style="background-image:url('plot.jpg');background-repeat:no-repeat;background-size:cover;">
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

                <li> <a href="logout.php" target="blank">Logout</a></li>
            </ul>

        </div>
    </div>
    <br><br><br>

    <?php
    // echo $_SESSION['login_user'];
    if (isset($_SESSION['admin_user'])){
    // LOGGED IN
        ?>
        <div style="text-align:center;border:5px solid #100808">
            <h2>Logged in!!</h2>
        </div>
        <h2>Unactivated Users</h2>
        <?php
        $username = $_SESSION['admin_user'];
        $sql = sprintf("SELECT * FROM user WHERE activated=0");
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            // print_r($row);
            $user_name = $row['username'];
            $fullname = $row['fullname'];
            $email = $row['email'];
            $regno = $row['regno'];
            $branch = $row['branch'];
            $rollno = $row['rollno'];
            $contact = $row['contact'];
            $gender = $row['gender'];
            $dob = $row['dob'];
            $activated = $row['activated'];
            ?>
            <span>Fullname: <?php echo $fullname; ?></span><br>
            <span>Email: <?php echo $email; ?></span><br>
            <span>Registration No: <?php echo $regno; ?></span><br>
            <span>Branch: <?php echo $branch; ?></span><br>
            <span>Roll No: <?php echo $rollno; ?></span><br>
            <span>Contact No: <?php echo $contact; ?></span><br>
            <span>Gender: <?php echo $gender; ?></span><br>
            <span>Date of Birth: <?php echo $dob; ?></span><br>
            <span>Is account activated: <?php echo $activated; ?></span><br>
            <a href="activate.php?username=<?php echo $user_name; ?>"><button>Activate</button></a>
            <hr>
            <?php
            }
        } else {
            echo "0 results";
        }
        ?>
        
        <?php
    }
    else {
        // NOT LOGGED IN
        ?>
        
        <div style="text-align:center;border:5px solid #100808">
            <h2>Not logged in.</h2>
        </div>
        
        <?php
    }



    ?>

</body>
</html>
