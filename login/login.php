<!Doctype html>
  <html class="animated fadeIn">
    <head>
      <title>Login | CVSU Imus - Online Library</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="shortcut icon" type="image/png" href="../css/pics/favicon.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

    <body>
      <div class="container-transition">
        <div class = "box">
          <div id="lftbx">

            <div class="box-items">
              <img src="../css/pics/cvsulogo.png" id="flg"></img>
              <h3>ONLINE LIBRARY</h3>
              <h4>Cavite State University - Imus Campus</h4>
            </div>

          </div>

          <div id="rgtbx">
            <div class="box-items">
              <form method="post" action="login-backend.php">
                <h1>SIGN IN</h1>

                <div id="rol">
                  <p id="select_role">Select your role:</p>
                  <select name="user_role" id="rl">
                    <option name="user_role" value="students" selected>Student</option>
                    <option name="user_role" value="instructors">Instructor</option>
                    <option name="user_role" value="staffs">Staff</option>
                    <option name="user_role" value="admins">Administrator</option>
                  </select>
                </div>

                <div class="sucontainer" id="usr">
                  <input class="input-field" type = "text" id = "usrname" name = "user_email" placeholder = "CvSU Email" maxlength = "75" required>
                </div>

                <div class="sucontainer" id="psw">
                  <input class="input-field" type = "password" id = "pass" name = "user_password" placeholder = "Password" maxlength = "32" required>
                </div>

                <!-- <p class="forgot">Forgot your password?</p> -->

                <a href="home.html"><button class="pushable" name="user_login">
                    <span class="front">SIGN IN</span>
                </button></a>

                <p class="signup">Not a member? <a href="../roles/register.php">Register here!</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
