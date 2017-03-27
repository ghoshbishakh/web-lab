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
                        <a href="admin_login.html" target="blank">Administrator Login</a>
                        <a href="login.php" target="blank">Student Login</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <br><br><br>

    <?php
    $host = 'localhost';
    $db = 'student';
    $user = 'root';
    $password = 'root';
    $con = new mysqli($host,$user,$password) or die('connection failed');
    // echo "connection established";
    mysqli_select_db($con,$db);

    session_start();

    // echo $_SESSION['login_user'];
    if (isset($_SESSION['login_user'])){
    // LOGGED IN
        $username = $_SESSION['login_user'];
        $sql = sprintf("SELECT * FROM user WHERE username='%s'", $username);
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
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
            // output data of each row
            // while($row = $result->fetch_assoc()) {
            //     echo print_r($row);
            // }
        } else {
            echo "0 results";
        }
        ?>
        
        <div style="text-align:center;border:5px solid #100808">
            <h2>Logged in!!</h2>
            <hr>
            <h3>Fullname: <?php echo $fullname; ?></h3>
            <h3>Email: <?php echo $email; ?></h3>
            <h3>Registration No: <?php echo $regno; ?></h3>
            <h3>Branch: <?php echo $branch; ?></h3>
            <h3>Roll No: <?php echo $rollno; ?></h3>
            <h3>Contact No: <?php echo $contact; ?></h3>
            <h3>Gender: <?php echo $gender; ?></h3>
            <h3>Date of Birth: <?php echo $dob; ?></h3>
            <h3>Is account activated: <?php echo $activated; ?></h3>
        </div>
        
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
