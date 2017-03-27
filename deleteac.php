<div id="code">
 <div id="code-st"><?php include('session.php'); ?>
<!DOCTYPE  html>
<html>
<body>
 
<div  id="contentbox"  >
<script  type="text/javascript">
function  countdown()  {
var  i  =  document.getElementById('timecount');
if  (parseInt(i.innerHTML)<=1)  {
location.href  =  'index.html';
}
i.innerHTML  =  parseInt(i.innerHTML)-1;
}
setInterval(function(){  countdown();  },1000);
</script>
<?php
include  ('db.php');
$un=$loggedin_session;
$sql="DELETE  FROM  users  WHERE username='$un'";
$result=mysqli_query($db,$sql);
if($result){
echo  "
<div  align='center'>";
echo  "Account  Deleted  Sucessfully.";
echo  "
 
<a  href='index.html'  >Click  here</a>  to  go  back.
 
";
echo  "</div>
 
";
}
elseif(!isset($loggedin_session)  ||  $loggedin_session==NULL)
{
header("Location:  index.html");
}
else  {
echo  "Unable  to  delete  Your  Account";
}
?>
<?php mysqli_close($db); ?>
</div>
 
</body>
</html>
</div>