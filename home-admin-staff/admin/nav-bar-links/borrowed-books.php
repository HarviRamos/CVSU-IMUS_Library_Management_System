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
    <h2>TRANSACTIONS / BORROWED BOOKS</h2>
  </div>
  
    <table id="trans">
      <tr>
        <th style="width:25%">Name</th> <!--Revise design if you want to add Section-->
        <th style="width:25%">Book Title</th>
        <th style="width:20%">Date Requested</th>
        <th style="width:20%">Return Due Date</th>
        <th style="width:10%">Return Day</th>
        <th style="width:10%">Confirm</th>
      </tr>
      <?php 
        $query = "SELECT br.*, b.book_title ,s.student_name
        FROM borrow_request_student br, book b, students s
        WHERE br.book_id=b.book_id AND br.student_number=s.student_number
        AND (br.request_status='BORROWED');";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $transaction_id = $data['transaction_id'];
          $book_title = $data["book_title"];    
          $transaction_date  = $data["transaction_date"];
          $return_due_date  = $data["return_due_date"];
          $student_name = $data["student_name"];  
      ?>
          <tr>
            <td><?php echo $student_name?></td>
            <td><?php echo $book_title?></td>
            <td><?php echo $transaction_date?></td>
            <td><?php echo $return_due_date?></td>
            <td><form action="borrowed-books.php" method="post">
              <input type="date" name="return_date"></input></td>
            <td><button type="submit" name="confirm_returned">RETURNED</button></td>
            </form>     
          </tr> 
      <?php
      }
    ?>
    </table>
</body>
</html>

<?php
if(isset($_POST["confirm_returned"])){
  $return_date = date('Y-m-d', strtotime($_POST['return_date']));
  if($return_date){
    $query = "UPDATE borrow_request_student SET request_status='RETURNED', return_date='$return_date', staff_return='$admin_number' WHERE transaction_id=$transaction_id";
    mysqli_query($con,$query);
    echo '<script type="text/javascript">alert("SUCCESSFULL!"); 
      location="book-approved-request.php"; </script>';
  }else{
    echo '<script type="text/javascript">alert("PLEASE SET PICKUP DATE!"); 
      location="book-approved-request.php"; </script>';
  }
}
