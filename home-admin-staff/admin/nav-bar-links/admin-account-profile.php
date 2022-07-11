<?php
session_start();
    include '../admin-nav-bar.php';
    include '../home-admin-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_admin_login($con);
    $admin_name = $user_data["admin_name"];
    $admin_number = $user_data["admin_number"];
    $admin_email = $user_data["admin_email"];
    $admin_contact = $user_data["admin_contact"];
    $admin_password = $user_data["admin_password"]; 
?>
<body>
    <div class="account-header">
      <h2>ACCOUNT / PROFILE</h2>
    </div>

    <div class="profile-container">
      <div class="profile-header">Account Details</div>

      <div class="left">
        <div class="details-label"><label>Full Name:</label></div>
        <div class="details-label"><label>Admin Number:</label></div>
        <div class="details-label"><label>CVSU Email:</label></div>
        <div class="details-label"><label>Contact Number:</label></div>
      </div>

      <div class="right">
        <div class="details"><p style="font-size: 15px; margin-left:10px;"><?php echo $admin_name?></p></div>
        <div class="details"><p style="font-size: 15px; margin-left:10px;"><?php echo $admin_number?></p></div>
        <div class="details"><p style="font-size: 13px; margin-left:10px;"><?php echo $admin_email?></p></div>
        <div class="details"><p style="font-size: 15px; margin-left:10px;">+639<?php echo $admin_contact?></p></div>
        <div class="pass-change"><a href="#" id="change-pass">Change Password?</a></div>
      </div>
    </div>

    <div class="change-modal" id="modal-change">
        <div class="change-container">
          <span class="close">&times;</span>
          <div class="change-header">Change Password</div>

          <div class="change-left">
            <div class="change-details-label"><label>Current Password:</label></div>
            <div class="change-details-label"><label>New Password:</label></div>
            <div class="change-details-label"><label>Confirm New Password:</label></div>
          </div>

          <div class="change-right">
            <form action="admin-account-profile.php" method="post">
              <input type=password class="change-details" name="current_password"></input>
              <input type=password class="change-details" name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,31}" required title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter"></input>
              <input type=password class="change-details" name="confirm_new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,31}" required title="that must contain 8 or more characters that are of at least one number, and one uppercase and lowercase letter"></input>
          </div>
              <button class="save-change" id="change-save" name="change_password">Save</button>
            </form>
        </div>
    </div>
</body>
</html>

<script>
    var modalchange = document.getElementById("modal-change");
    var change = document.getElementById("change-pass");
    var closechange = document.getElementsByClassName("close")[0];

    change.onclick = function() {
      modalchange.style.display = "block";
    }

    closechange.onclick = function() {
      modalchange.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modalchange) {
        modalchange.style.display = "none";
      }
    }
</script>


<?php
// Change Password

  if(isset($_POST["change_password"])){
    $current_password = md5($_POST["current_password"]);
    $new_password = md5($_POST["new_password"]);
    $confirm_new_password = md5($_POST["confirm_new_password"]);

    if(isset($current_password) && isset($new_password) && isset($confirm_new_password)){
      if($current_password === $admin_password){
        if ($new_password === $confirm_new_password){
          $query =  "UPDATE admins SET admin_password='$new_password' WHERE admin_number=$admin_number";
          mysqli_query($con,$query);
          echo '<script type="text/javascript">alert("SUCCESSFUL!");    
            location="/../cvsu-imus-online-library/file_set/login/logout-backend.php"; </script>';
        }else{
          echo '<script type="text/javascript">alert("NEW PASSWORD DOESNT MATCH!"); 
            location="admin-account-profile.php"; </script>';
        }
      }else{
        echo '<script type="text/javascript">alert("WRONG OLD PASSWORD!"); 
            location="admin-account-profile.php"; </script>';
      }
    }
    else{
      echo '<script type="text/javascript">alert("DATA INCOMPLETE!"); 
            location="admin-account-profile.php"; </script>';
    }
  }