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
    <h2>RECORDS / SUGGESTIONS</h2>
  </div>

    <table id="a-suggestions">
      <tr>
        <th style="width:25%">Name</th>
        <th style="width:20%">Book Title</th>
        <th style="width:55%; text-align: center;">Message</th>
      </tr>
      <?php
        $query = "SELECT ss.*,s.student_name FROM `student_suggestion` AS ss, `students` AS s
        WHERE ss.student_number=s.student_number;";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $book_title = $data["book_name"];
          $suggestion_date  = $data["suggestion_date"];
          $student_name = $data["student_name"];
          $comment = $data["comment"];
      ?>
          <tr>
            <td><?php echo $student_name?></td>
            <td><?php echo $book_title?></td>
            <td><?php echo $comment?></td>
          </tr>
      <?php
        }
    ?>
    </table>
</body>
</html>
