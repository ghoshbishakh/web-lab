<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
	<script src="jquery-3.1.1.min.js"></script>
    <title>Student Registration Page</title>
</head>
<body>
	<div id="heading">
		<h1>STUDENT REGISTRATION PAGE</h1>
	</div>
	
	<div class="container">
		<h3><b>Personal Details</b></h3>
		<div class="row">
            <div class="col-md-3">
                
                <form class="form-horizontal" method="post" action="register.php">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <label for="reg">Registration Number: </label>
						<input id="reg" type="text" class="form-control" name="reg" placeholder="20140087" onchange="updateYT();" required>
					</div>
                    <div class="form-group">
						<label>Your Institute Roll Number: </label>
						<input id="yt" class="form-control" type="text" name="roll" placeholder="Automatically Generated" disabled="disabled">
                    </div>
					<div class="form-group">
						<label>Date Of Birth: </label>
						<input id="dob" class="form-control" type="date" name="dob" placeholder="1995-10-30" onchange="updateAge()" required>
					</div>
                </form>
            </div>
			<div class="col-md-1"></div>
			<div class="col-md-3">
                <form class="form-horizontal" method="post" action="register.php">
                    <div class="form-group">
                        <label for="midname">Middle Name</label>
                        <input type="text" id="midname" name="midname" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch: </label>
						<select  class="form-control" id="branch" name="branch" onchange="updateYT();">
							<option value="BT">BT</option>
							<option value="CH">CH</option>
							<option value="CE">CE</option>
							<option value="CSE">CSE</option>
							<option value="ECE">ECE</option>
							<option value="EE">EE</option>
							<option value="IT">IT</option>
							<option value="ME">ME</option>
							<option value="MME">MME</option>
						</select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com">
                    </div>
					<div class="form-group">
						<label>Age</label>
						<input class="form-control" type="text" id="age">
					</div>
                </form>
            </div>
			<div class="col-md-1"></div>
            <div class="col-md-3">
				<form class="form-horizontal" method="post" action="register.php">
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
                    </div>

                    <div class="form-group">
						<label for="roll">Roll Number: </label>
						<span id="prefix">&nbsp;</span>
						<input id="roll" class="form-control" type="text" name="rolln" placeholder="05" onchange="updateYT();" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Contact Number: </label>
						<input class="form-control" id="contact" type="text" name="contact" placeholder="10-digit phone number">;
                    </div>
					<div class="form-group">
						<label for="gender">Gender: </label>
						<br>
						<div style="float:left;">
						<input type="radio" name="gender" value="male" >Male<br>
						<input type="radio" name="gender" value="female" >Female<br>
						<input type="radio" name="gender" value="other" >Other<br>
						</div>
					</div>
                </form>
            </div>
        </div>
	</div>
		<br><br>

	
	<div class="container">
		<div class="row">
	<h3><b>Educational Qualifications</b></h3>
	
		<div class="col-md-12">
		<p><b>Under Graduate(B.Tech)</b></p>
			<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th>1st Semester</th>
                <th>2nd Semester</th>
                <th>3rd Semester</th>
                <th>4th Semester</th>
                <th>5th Semester</th>
                <th>6th Semester</th>
                <th>7th Semester</th>
                <th>8th Semester</th>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="SGPA"/></td>
                </tr>
				<tr>
					<td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
                    <td><input type="text" class="form-control" placeholder="CGPA"/></td>
				</tr>
            </tbody>
        </table>
    </div>
</form>
<br>
<p><b>Higher Secondary</b></p>
<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th>Board</th>
                <th>Name of the Institution</th>
                <th>Total Marks</th>
                <th>Total Marks Obtained</th>
                <th>Percentage(%)</th>
            </thead>
            <tbody>
                <tr>
                    <td>
						<select class="form-control">
							<option>Central Board of Secondary Education (CBSE)</option>
							<option>Indian Certificate of Secondary Education (ICSE)</option>
							<option>State Boards</option>
							<option>Others</option>
						</select>
					</td>
                    <td><input type="text" class="form-control"/></td>
                    <td><input type="text" class="form-control"/></td>
                    <td><input type="text" class="form-control"/></td>
                    <td><input type="text" class="form-control"/></td>
                </tr>
            </tbody>
        </table>
    </div>
</form>
<br>
<p><b>Senior Secondary</b></p>
<form class="form-horizontal">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-highlight">
            <thead>
                <th>Board</th>
                <th>Name of the Institution</th>
                <th>Total Marks/CGPA</th>
                <th>Total Marks Obtained/CGPA</th>
                <th>Percentage(%)/CGPA</th>
            </thead>
            <tbody>
                <tr>
                    <td>
						<select class="form-control">
							<option>Central Board of Secondary Education (CBSE)</option>
							<option>Indian Certificate of Secondary Education (ICSE)</option>
							<option>State Boards</option>
							<option>Others</option>
						</select>
					</td>
                    <td><input type="text" class="form-control"/></td>
                    <td><input type="text" class="form-control"/></td>
                    <td><input type="text" class="form-control"/></td>
                    <td><input type="text" class="form-control"/></td>
                </tr>
            </tbody>
        </table>
    </div>
</form>
	</div>
</div>
</div>
<div class="form-horizontal">
<div class="container">
	<div class="row">
		<h3><b>Skills</b></h3>
		<textarea class="form-control"></textarea>
	</div>
</div>
</div>

<div class="form-horizontal">
<div class="container">
	<div class="row">
		<h3><b>Hobbies</b></h3>
		<textarea class="form-control"></textarea>
	</div>
</div>
</div>
<div class="form-horizontal">
	<div class="container">
		<div class="row">
				<div style="position:relative;">
					<h3><b>Upload CV</b></h3>
					<a class='btn btn-primary' href='javascript:;'>
            Choose File...
					<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
					</a>
					&nbsp;
			<span class='label label-info' id="upload-file-info"></span>
</div>
		</div>
	</div>
</div>
<br><br>
<center><input id="submit-button" type="submit" value="Register" onclick="welcome.php"></center>	
</body>
<script>
function updateYT() {
		var reg = jQuery('#reg');
		var branch = jQuery('#branch');
		var roll = jQuery('#roll');
		var yt = jQuery('#yt');
		var pre = jQuery('#prefix');
		if (!reg || !branch || !roll || !yt || !pre) {
			console.log("ERROR: Input field not found!");
			return false;
		}

		var regstr = reg.val();
		if (regstr.length < 4) {
			console.log("Reg string is too short");
			return false;
		} else {
			regstr = regstr.substring(2, 4);
			console.log('REGSTR:');
			console.log(regstr);
		}

		var branchstr = branch.val();
  if (branchstr.length < 2) { 
  	console.log("Branch string is too short");
}

pre.html( regstr + '/' + branchstr + '/');

var rollstr = roll.val();
  if (rollstr.length < 1) { 
  	console.log("Roll string is too short");
}

var ret =  regstr + '/' +  branchstr + '/' + rollstr;
yt.val(ret);
}

function updateAge(){
	var dob = $('#dob').val();
	dob = new Date(dob);
	var today = new Date();
	var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
	$('#age').val(age+' years old');
}

</script>
</html>