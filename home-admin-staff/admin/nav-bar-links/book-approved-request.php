<?php
session_start();
    include '../admin-nav-bar.php';
    include '../../../database/database_connection.php';
    include '../home-admin-backend.php';
    $user_data = check_if_admin_login($con);
    $admin_number = $user_data["admin_number"];
?>
<body>

  <div class="account-header">
    <h2>TRANSACTIONS / APPROVED BOOK REQUESTS</h2>
  </div>
  
    <table id="trans">
      <tr>
        <th style="width:25%">Name</th> <!--Revise design if you want to add Section-->
        <th style="width:25%">Book Title</th>
        <th style="width:20%">Date Requested</th>
        <th style="width:10%">Pickup Date</th>
        <th style="width:10%">Set Return Date</th>
        <th style="width:10%">Confirm</th>
      </tr>
      <?php 
        $query = "SELECT br.*, b.book_title ,s.student_name
        FROM borrow_request_student br, book b, students s
        WHERE br.book_id=b.book_id AND br.student_number=s.student_number
        AND (br.request_status='APPROVED');";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $transaction_id = $data['transaction_id'];
          $book_title = $data["book_title"];    
          $transaction_date  = $data["transaction_date"];
          $pickup_date  = $data["pickup_date"];
          $student_name = $data["student_name"];  
      ?>
          <tr>
            <td><?php echo $student_name?></td>
            <td><?php echo $book_title?></td>
            <td><?php echo $transaction_date?></td>
            <td><?php echo $pickup_date?></td>
            <td><form action="book-approved-request.php" method="post">
              <input type="date" name="return_due_date"></input></td>
            <td><button type="submit" name="confirm_recieved">RECIEVED</button></td>
            </form>     
          </tr> 
      <?php
        }
    ?>
    </table>
</body>
</html>

<?php
if(isset($_POST["confirm_recieved"])){
  $return_due_date = date('Y-m-d', strtotime($_POST['return_due_date']));
  if($return_due_date){
    $query = "UPDATE borrow_request_student SET request_status='BORROWED', return_due_date='$return_due_date', staff_borrow=$admin_number WHERE transaction_id=$transaction_id";
    mysqli_query($con,$query);
    echo '<script type="text/javascript">alert("SUCCESSFULL!"); 
      location="book-approved-request.php"; </script>';
  }else{
    echo '<script type="text/javascript">alert("PLEASE SET PICKUP DATE!"); 
      location="book-approved-request.php"; </script>';
  }
}
