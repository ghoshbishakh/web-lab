<!DOCTYPE html>
<html>

  <head>
    <title>Sign Up Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="jquery-3.1.1.min.js"></script>
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
              <a href="admin_login.html" target="blank">Administrator Login</a>
              <a href="login.php" target="blank">Student Login</a>
            </div>
          </li>
        </ul>

      </div>
    </div>

    <div class="content">
      <center>
        <h1>Sign up</h1>
      </center>
      <div id="signup-wrapper">
        <form method="post" action="signup.php" id="signupform">
          <label>Username: </label>
          <input id="username-input" class="text-input" type="text" name="username" placeholder="username" required>
          <div id="user_status"></div>
          <br>
          <br>
          <label>Email: </label>
          <input id="email-input" class="text-input" type="email" name="email" placeholder="Email ID" required>
          <br>
          <br>
          <label>Full Name: </label>
          <input id="fullname-input" class="text-input" type="text" name="fullname" placeholder="Full Name">
          <br>
          <br>
          <label>Reg No: </label>
          <input id="reg" class="text-input" type="text" name="reg" placeholder="20140087" onchange="updateYT();" required>

          <br>
          <br>
          <label>Branch: </label>
          <select name="branch" style="float:right;" id="branch" onchange="updateYT();">
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
          <br>
          <br>
          <label>Roll No: </label>
          <span id="prefix">&nbsp;</span>
          <input id="roll" class="text-input" type="text" name="roll" placeholder="7" onchange="updateYT();" required>

          <br>
          <br>
          <label>Your Institute Roll Number: </label>
          <input id="yt" class="text-input" type="text" name="fullroll" placeholder="Automatically Generated" readonly>

          <br>
          <br>
          <label>Contact Number: </label>
          <input id="contact-input" class="text-input" type="tel" name="contactnumber" placeholder="Contact Number">
          <br>
          <br>
          <label>Gender: </label>
          <div style="float:right;">
            <input type="radio" name="gender" value="male">Male
            <br>
            <input type="radio" name="gender" value="female">Female
            <br>
            <input type="radio" name="gender" value="other">Other
            <br>
          </div>
          <br>
          <br>
          <br>
          <br>
          <label>Date Of Birth: </label>
          <input id="dob" class="text-input" type="date" name="dob" placeholder="1995-10-30" onchange="updateAge()" required>
          <br>
          <br>
          <label>Age</label>
          <input class="text-input" type="text" id="age">
          <br>
          <br>
          <label>Password: </label>
          <input id="password-field" class="text-input" type="password" name="password" placeholder="Password" required>
          <br>
          <br>
          <label>Confirm Password: </label>
          <input id="confirm-password-field" class="text-input" type="password" name="confirm-password" placeholder="Confirm Password" required>
          <br>
          <br>
          <hr>
          <h3>Academic Details</h3>
          <div class="academic-details">
            <h4>Secondary</h4>
            <table class="secondary-exam-table">
              <thead>
                <th>Board</th>
                <th>Name of the Institution</th>
                <th>Percentage(%) Marks</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select name="secondary-board">
                      <option value="CBSE">CBSE</option>
                      <option value="ICSE">ICSE</option>
                      <option value="State">State Boards</option>
                      <option value="Others">Others</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" name="secondary-school" />
                  </td>
                  <td>
                    <input type="text" name="secondary-percentage" />
                  </td>
                </tr>
              </tbody>
            </table>

            <h4>Higher Secondary</h4>
            <table class="secondary-exam-table">
              <thead>
                <th>Board</th>
                <th>Name of the Institution</th>
                <th>Percentage(%) Marks</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <select name="hs-board">
                      <option value="CBSE">CBSE</option>
                      <option value="ICSE">ICSE</option>
                      <option value="State">State Boards</option>
                      <option value="Others">Others</option>
                    </select>
                  </td>
                  <td>
                    <input type="text" name="hs-school" />
                  </td>
                  <td>
                    <input type="text" name="hs-percentage" />
                  </td>
                </tr>
              </tbody>
            </table>

            <h4>B.Tech</h4>
            <table>
              <thead>
                <th>1st Sem</th>
                <th>2nd Sem</th>
                <th>3rd Sem</th>
                <th>4th Sem</th>
                <th>5th Sem</th>
                <th>6th Sem</th>
                <th>7th Sem</th>
                <th>8th Sem</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input name="btech-sgpa-1" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-2" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-3" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-4" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-5" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-6" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-7" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="btech-sgpa-8" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <input name="btech-cgpa-1" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-2" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-3" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-4" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-5" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-6" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-7" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="btech-cgpa-8" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                </tr>
              </tbody>
            </table>
            <h4>M.Tech</h4>
            <table>
              <thead>
                <th>1st Sem</th>
                <th>2nd Sem</th>
                <th>3rd Sem</th>
                <th>4th Sem</th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <input name="mtech-sgpa-1" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="mtech-sgpa-2" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="mtech-sgpa-3" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                  <td>
                    <input name="mtech-sgpa-4" class="sgpa-input" type="number" min="0" max="10" placeholder="SGPA" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <input name="mtech-cgpa-1" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="mtech-cgpa-2" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="mtech-cgpa-3" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                  <td>
                    <input name="mtech-cgpa-4" class="sgpa-input" type="number" min="0" max="10" placeholder="CGPA" />
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <hr>



          <h2>Address</h2>
          <label for="street">Street: </label>
          <input id="street" name="cstreet" type="text" size="40">
          <label for="pincode">Pincode: </label>
          <input id="pin" name="cpin" type="text" size="40">
          <label for="state">State: </label>
          <input id="state" name="cstate" type="text" size="40">
          <label for="country">Country: </label>
          <input id="country" type="text" name="ccountry" size="40">


          <h3><b>Skills</b></h3>
            <p>
              <input type="checkbox" id="cbox1" value="adobephotoshop">
              <label for="cbox1">Adobe Photoshop</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="ajax">
              <label for="cbox1">AJAX</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="bootstrap">
              <label for="cbox1">Bootstrap</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="c">
              <label for="cbox1">C</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="cplusplus">
              <label for="cbox1">C++</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="csharp">
              <label for="cbox1">C#</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="catia">
              <label for="cbox1">CATIA</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="autocad">
              <label for="cbox1">AutoCAD</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="java">
              <label for="cbox1">Java</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="matlab">
              <label for="cbox1">MATLAB</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="python">
              <label for="cbox1">Python</label>
            </p>
            <p>
              <input type="checkbox" id="cbox1" value="node">
              <label for="cbox1">NodeJS</label>
            </p>


          <center>
            <input id="submit-button" type="submit" value="Sign Up" onclick="validatePassword()">
            <input id="submit-button" type="submit" value="Reset" onclick="resetFields()">
          </center>
        </form>
      </div>
    </div>
    <script type="text/javascript">
      function resetFields() {
        document.getElementById('signupform').reset();
      }


      function validateUsername() {
        var usernameRegex = /^[A-Za-z][A-Za-z0-9][A-Za-z0-9]+$/;

        var username = $("#username-input").val();
        // alert(usernameRegex.test(username));

        if (!(usernameRegex.test(username))) {
          $("#username-input").removeClass('greenborder').addClass('redborder');

        } else if (username == " ") {
          $("#username-input").removeClass('greenborder').addClass('redborder');
        } else {
          $("#username-input").removeClass('redborder').addClass('greenborder');
          return false;
        }


      }

      function validateEmail() {
        var emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var email = $("#email-input").val();
        // alert(emailRegex.test(email));

        if (!(emailRegex.test(email))) {
          $("#email-input").removeClass('greenborder').addClass('redborder');

        } else if (email == " ") {
          $("#email-input").removeClass('greenborder').addClass('redborder');
        } else {
          $("#email-input").removeClass('redborder').addClass('greenborder');
          return false;
        }


      }

      function validateFullname() {
        var fullnameRegex = /^[A-Z][A-Za-z ]+$/;

        var fullname = $("#fullname-input").val();
        //alert(fullnameRegex.test(fullname));

        if (!(fullnameRegex.test(fullname))) {
          $("#fullname-input").removeClass('greenborder').addClass('redborder');

        } else if (fullname == " ") {
          $("#fullname-input").removeClass('greenborder').addClass('redborder');
        } else {
          $("#fullname-input").removeClass('redborder').addClass('greenborder');
          return false;
        }
      }

      function validateRollno() {
        var rollnoRegex = /^[1-9][0-9]{0,2}$/;

        var rollno = $("#roll").val();
        // alert(rollnoRegex.test(rollno));

        if (!(rollnoRegex.test(rollno))) {
          $("#roll").removeClass('greenborder').addClass('redborder');

        } else if (rollno == " ") {
          $("#roll").removeClass('greenborder').addClass('redborder');
        } else {
          $("#roll").removeClass('redborder').addClass('greenborder');
          return false;
        }
      }

      function validateReg() {
        var regnRegex = /^[0-9]{8,8}$/;

        var regn = $("#reg").val();
        // alert(regnRegex.test(regn));

        if (!(regnRegex.test(regn))) {
          $("#reg").removeClass('greenborder').addClass('redborder');

        } else if (regn == " ") {
          $("#reg").removeClass('greenborder').addClass('redborder');
        } else {
          $("#reg").removeClass('redborder').addClass('greenborder');
          return false;
        }
      }

      function validateContact() {
        var contactRegex = /^[7-9][0-9]{9,9}$/;

        var contact = $("#contact-input").val();
        // alert(contactRegex.test(contact));

        if (!(contactRegex.test(contact))) {
          $("#contact-input").removeClass('greenborder').addClass('redborder');

        } else if (contact == " ") {
          $("#contact-input").removeClass('greenborder').addClass('redborder');
        } else {
          $("#contact-input").removeClass('redborder').addClass('greenborder');
          return false;
        }
      }

      function validatePassword() {
        var password = document.getElementById("password-field");
        var confirmPassword = document.getElementById("confirm-password-field");
        if (password.value != confirmPassword.value || password.value == " " || confirmPassword.value == " ") {
          alert("Passwords don't match!");
        } else if (password.value == confirmPassword.value)
        // alert("Successfully created your account!");
          console.log("password valid");
      }


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

        pre.html(regstr + '/' + branchstr + '/');

        var rollstr = roll.val();
        if (rollstr.length < 1) {
          console.log("Roll string is too short");
        }

        var ret = regstr + '/' + branchstr + '/' + rollstr;
        yt.val(ret);
      }

      function updateAge() {
        var dob = $('#dob').val();
        dob = new Date(dob);
        var today = new Date();
        var years = Math.floor((today - dob) / (365.25 * 24 * 60 * 60 * 1000));
        var months = (Math.floor((((today - dob) / (1000 * 60 * 60 * 24)) - (years * 365.25)) / 30));
        $('#age').val(years + ' years  and ' + months + ' months old');
      }

      jQuery(document).ready(function() {
        updateYT();

        $('#username-input').blur(validateUsername);
        $('#email-input').blur(validateEmail);
        $('#fullname-input').blur(validateFullname);
        $('#reg').blur(validateReg);
        $('#roll').blur(validateRollno);
        $('#contact-input').blur(validateContact);


        $('#username-input').blur(function() {
          var user_name = $('#username-input').val();
          //alert(user_name);
          $.post("check.php", {
              username: user_name,
            },
            function(data, status) {
              //alert("Data: " + data + "\nStatus: " + status);
              if (data == "exists") {
                $("#user_status").html("Username already exists");
              } else {
                $("#user_status").html("")
              }
            });
        });



      });

    </script>

  </body>

</html>
