<?php
session_start();
    include '../staff-nav-bar.php';
    include '../home-staff-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_staff_login($con);
    $staff_name = $user_data["staff_name"];
    $staff_number = $user_data["staff_number"];
    $staff_email = $user_data["staff_email"];
    $staff_contact = $user_data["staff_contact"];
    $staff_password = $user_data["staff_password"];
?>
<body>
  <div class="account-header">
    <h2>RECORDS / SUGGESTIONS</h2>
  </div>

    <table id="a-suggestions">
      <tr>
        <th style="width:25%">Name</th>
        <th style="width:20%">Book Title</th>
        <th style="width:55%; text-align: center;">Message</th>
      </tr>
      <?php
        $query = "SELECT iss.*,i.instructor_name FROM `instructor_suggestion` AS iss, `instructors` AS i
        WHERE iss.instructor_number=i.instructor_number;";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $book_title = $data["book_name"];
          $suggestion_date  = $data["suggestion_date"];
          $instructor_name = $data["instructor_name"];
          $comment = $data["comment"];
      ?>
          <tr>
            <td><?php echo $instructor_name?></td>
            <td><?php echo $book_title?></td>
            <td><?php echo $comment?></td>
          </tr>
      <?php
        }
    ?>
    </table>
</body>
</html>
