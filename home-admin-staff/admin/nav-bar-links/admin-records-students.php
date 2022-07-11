<?php
session_start();
    include '../admin-nav-bar.php';
    include '../../../database/database_connection.php';
?>
<body>
  <div class="account-header">
      <h2>RECORDS / STUDENTS</h2>
    </div>
    
      <table id="records">
        <tr>
          <th style="width:30%">Name</th>
          <th style="width:15%">Course</th>
          <th style="width:25%">Contact Number</th>
          <th style="width:30%">Email Address</th>
        </tr>
        <?php 
          $query = "SELECT * FROM students";
          $result = mysqli_query($con,$query);
          while ($data = mysqli_fetch_array($result)){
            $student_name = $data["student_name"];
            $student_course = $data["student_course"];
            $student_contact = $data["student_contact"];
            $student_email = $data["student_email"];      
        ?>
            <tr>
              <td><?php echo $student_name?></td>
              <td><?php echo $student_course?></td>
              <td>+639<?php echo $student_contact?></td>
              <td><?php echo $student_email?></td>  
            </tr> 
        <?php
          }
      ?>
      </table>
</body>
</html>
