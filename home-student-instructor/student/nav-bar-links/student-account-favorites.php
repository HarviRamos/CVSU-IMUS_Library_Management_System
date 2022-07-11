<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
?>
<body>

    <div class="account-header">
      <h2>ACCOUNT / FAVORTIES</h2>
    </div>

    <div class="tabs-container">
        <div class="tab">
          <button class="tablinks" onclick="opentab(event, 'student-f-Books')" id="defaultOpen">Books</button>
          <button class="tablinks" onclick="opentab(event, 'student-f-Thesis')">Thesis</button>
        </div>

        <div id="student-f-Books" class="tabcontent">
        </div>

        <div id="student-f-Thesis" class="tabcontent">
        </div>
    </div>

<script>
function opentab(evt, studentfav) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(studentfav).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

</body>
</html>
