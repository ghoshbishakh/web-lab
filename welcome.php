<?php include('session.php'); ?>
<!DOCTYPE  html>
<html>
<head>
<meta  content='text/html;  charset=UTF-8'  http-equiv='Content-Type'/>
<link  rel="stylesheet"  type="text/css"  href="style1.css"  />
<title>Profile Page</title>
</head>
<body>
<div  id="center">
 
<div  id="center-set">
 
 
 
<h1  align='center' style="text-shadow:3px 2px #40a2c7">Welcome  <?php  echo  $loggedin_session;  ?> </h1>
 
 
<div  id="contentbox">
<?php include('db.php'); $sql="SELECT  *  FROM  users  where  username='$loggedin_session'"; $result=mysqli_query($db,$sql); ?>
<?php while($rows=mysqli_fetch_array($result)){ ?>
 
<div  id="signup">
 
<div  id="signup-st">
 
<form  action=""  method="POST"  id="signin"  id="reg">
 
<div  id="reg-head"  class="headrg">Your  Profile</div>
 
 
<table  border="0"  align="center"  cellpadding="2"  cellspacing="0">
 
<tr  id="lg-1">
 
<td  class="tl-1">
<div  align="left"  id="tb-name">Username:</div>
</td>
 
 
<td  class="tl-4"><?php  echo  $rows['username'];  ?></td>
 
</tr>
 
 
<tr  id="lg-1">
 
<td  class="tl-1">
<div  align="left"  id="tb-name">Registration Number:</div>
</td>
 
 
<td  class="tl-4"><?php  echo  $rows['reg'];  ?>  </td>
 
</tr>
 
 
<tr  id="lg-1">
 
<td  class="tl-1">
<div  align="left"  id="tb-name">Email  id:</div>
</td>
 
 
<td  class="tl-4"><?php  echo  $rows['email'];  ?></td>
 
</tr>
 
 
</table>
  
</form>
 
</div>
 
</div>
 
 
<div  id="login">
 
<div  id="login-sg">
 
<div  id="st"><a  href="logout.php"  id="st-btn">Sign  Out</a></div>
 
 
<div  id="st"><a  href="deleteac.php"  id="st-btn">Delete  Account</a></div>
 
</div>
 
</div>
 
<?php  } ?>
</div>
 
</div>
 
</div>
 
<?php mysqli_close($db); ?>

 

 
</body>
</html>