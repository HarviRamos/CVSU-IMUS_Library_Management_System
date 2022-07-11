<?php
session_start();
    include '../admin-nav-bar.php';
    include '../../../database/database_connection.php';
?>
<body>
  <div class="account-header">
      <h2>RECORDS / INSTRUCTORS</h2>
    </div>
    
      <table id="records">
        <tr>
          <th style="width:30%">Name</th>
          <th style="width:15%">Department</th>
          <th style="width:25%">Contact Number</th>
          <th style="width:30%">Email Address</th>
        </tr>
        <?php 
          $query = "SELECT * FROM instructors";
          $result = mysqli_query($con,$query);
          while ($data = mysqli_fetch_array($result)){
            $instructor_name = $data["instructor_name"];
            $instructor_department = $data["instructor_department"];
            $instructor_contact = $data["instructor_contact"];
            $instructor_email = $data["instructor_email"];      
        ?>
            <tr>
              <td><?php echo $instructor_name?></td>
              <td><?php echo $instructor_department?></td>
              <td>+639<?php echo $instructor_contact?></td>
              <td><?php echo $instructor_email?></td>  
            </tr> 
        <?php
          }
      ?>
      </table>
</body>
</html>