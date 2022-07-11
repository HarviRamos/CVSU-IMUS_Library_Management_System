<?php
?>
<!Doctype html>
  <html class="animated fadeIn">

    <head>
        <title>Sign Up | CVSU Imus - Online Library</title>
          <link rel="stylesheet" href="../css/student-reg.css">
          <link rel="stylesheet" href="../css/animate.css">
          <link rel="shortcut icon" type="image/png" href="../css/pics/favicon.png"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
      <div class="container-transition">  <!-- CONTAINER TRANSITION START(ARIS)-->
        <!-- <form class = "box" action = "../login.html" method = "post"> (ARIS)-->
        <div class = "box"><!-- BOX DESIGN START(ARIS)-->
          <div class="box-items">  <!-- BOX-ITEMS START(ARIS)-->
            <img class="logo" src="../css/pics/cvsulogo.png">
              <div class="logotitle">
                <h2 style="font-size: 60px; text-align: left; margin-left: 20px; font-family: 'Archivo', sans-serif; font-weight: 700">Online Library</h2>
                <p style="font-size: 18px; text-align: left; margin-left: 30px; line-height: 0; letter-spacing: 4px; font-family: 'Archivo', sans-serif; font-weight: 300">Cavite State University - Imus</p>
              </div>

              <div id="rol">
                <h5>Create Account Student</h5>
              </div>



            <div id="student" class="inv">
              <form method="post" action="student-reg-backend.php">  <!-- STUDENT FORM(ARIS)-->
                <div id="lft"> <!-- LEFT START(ARIS)-->

                  <!-- NAME(ARIS)-->
                  <div id="nm">
                    <h2>Full Name</h2>
                      <input class="input-field" type = "text" id = "name" name = "student_name" placeholder="Surname - First - Middle" pattern=".{9,75}" required title="9 characters minimum, 75 characters maximum">
                      <i id="userlogo" class="fa fa-user fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END NAME(ARIS)-->

                  <!-- EMAIL(ARIS)-->
                  <div id="eml">
                    <h2>CVSU Email</h2>
                      <input class="input-field" type = "email" id = "email" name = "student_email" placeholder = "Email" pattern=".{9,75}" required title="9 characters minimum, 75 characters maximum">
                      <i id="emaillogo" class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END EMAIL(ARIS)-->

                  <!-- STUDENT NUMBER(ARIS)-->
                  <div id="sn">
                    <h2>Student Number</h2>
                      <input class="input-field" type = "number" id = "studnum" name = "student_number" placeholder = "e.g., 201910860" pattern=".{9,9}" required title="Must be 9 characters only">
                      <i id="emaillogo" class="fa fa-envelope fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END STUDENT NUMBER(ARIS)-->

                  <!-- STUDENT GENDER(ARIS)-->
                  <div id="gndr">
                    <h2 id="h2gnd">Gender</h2>
                        <select name="student_gender" id="gnd" required>
                            <option value="g1" disabled selected hidden>- - -</option>
                            <option name="student_gender" value="Male">Male</option>
                            <option name="student_gender" value="Female">Female</option>
                            <option name="student_gender" value="Others">Others</option>
                        </select>
                  </div>
                  <!-- END STUDENT GENDER(ARIS)-->

                  <!-- STUDENT CONTACT NUMBER(ARIS)-->
                  <div id="cont">
                    <h3>Contact Number(+639)</h3>
                    <input class="input-field" type = "number" id = "cnt" name = "student_contact" placeholder = "e.g., 123456789" pattern=".{9,9}" required title="Must be 9 characters only">
                    <i id="userlogo" class="fa fa-user fa-lg" aria-hidden="true"></i>
                  </div>
                  <!-- END STUDENT CONTACT NUMBER(ARIS)-->


                </div> <!-- LEFT END(ARIS)-->

                <div id="rgt"> <!-- RIGHT START(ARIS)-->

                    <!-- STUDENT COURSE(ARIS)-->
                    <div id="cs">
                      <h2>Course</h2>
                        <select class="input-field" name="student_course" id="crs" required>
                            <option value="g1" disabled selected hidden>- - -</option>
                            <option name="student_course" value="BSCS">Bachelor of Science in Computer Science</option>
                            <option name="student_course" value="BSBM">Bachelor of Science in Business Management</option>
                            <option name="student_course" value="BSE">Bachelor of Science in Entrepreneurship</option>
                            <option name="student_course" value="BSIT">Bachelor of Science in Information Technology</option>
                            <option name="student_course" value="BSHRM">Bachelor of Science in Hotel and Restaurant Management</option>
                            <option name="student_course" value="BSOA">Bachelor of Science in Office Administration</option>
                            <option name="student_course" value="BSSE">Bachelor of Science in Secondary Education</option>
                        </select>
                    </div>
                    <!-- END STUDENT COURSE(ARIS)-->
                    <br>

                    <!-- STUDENT PASSWORD(ARIS)-->
                    <div id="psw">
                      <h2>Password</h2>
                      <input class="input-field" type = "password" id = "password" name = "student_password_1" placeholder = "Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,31}" required title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter">
                      <i id="passlogo" class="fa fa-lock fa-lg" aria-hidden="true"></i>
                      <span toggle="#password-field" class="fa fa-fw fa-eye-slash fa-lg field_icon toggle-password"></span>
                    </div>
                    <!-- END STUDENT PASSWORD(ARIS)-->

                    <!-- STUDENT PASSWORD CONFIRMATION(ARIS)-->
                    <div id="cpsw">
                      <h2>Confirm Password</h2>
                        <input class="input-field" type = "password" id = "confirm_password" name = "student_password_2" placeholder = "Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,31}" required title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter">
                        <i id="confpasslogo" class="fa fa-lock fa-lg" aria-hidden="true"></i>
                    </div>
                    <!-- END STUDENT PASSWORD CONFIRMATION(ARIS)-->

                    <div id="changerole">
                      <a href="instructor-reg.php" style="text-decoration: none!important;"><input class="change" type = "button"
                      onclick="return confirm('Are you sure you want to change role?');" id="bt2"
                      required title="CHANGE ROLE"></a>
                    </div>

                </div><!-- END RIGHT(ARIS)-->

                  <input type="submit" name="student_register" value ="SIGN UP" id="bt1">



                  <p class="signup">Already have account?<a href="../login/login.php"> Sign in here!</a></p>
              </form> <!-- STUDENT FORM END(ARIS)-->
            </div> <!-- STUDENT FORM(ARIS)-->
          </div> <!-- BOX-ITEMS END(ARIS)-->
        </div> <!-- BOX DESIGN END(ARIS)-->
      </div> <!-- CONTAINER TRANSITION END(ARIS)-->
    </body>
</html>
