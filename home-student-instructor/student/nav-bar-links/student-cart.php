<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
    $student_number = $user_data["student_number"];  
?>
<div class="account-header">
    <h2>ACCOUNT / CART</h2>
  </div>

    <table id="s-history">
      <tr>
        <th style="width:10%">Book Title</th>
        <th style="width:20%">Date Borrowed</th>
        <th style="width:20%">Return Schedule</th>
        <th style="width:20%">Date Returned</th>
        <th style="width:8%">Type</th>
        <th style="width:8%">EDIT</th>
      </tr>
      <?php
        $query = "SELECT br.*, b.book_title
        FROM borrow_request_student br, book b, students s
        WHERE br.book_id=b.book_id AND br.student_number=s.student_number AND br.student_number=$student_number 
        AND (br.request_status='REQUEST' OR br.request_status='APPROVED' OR br.request_status='PENDING');
        ";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $transaction_id = $data["transaction_id"];
          $book_title = $data["book_title"];    
          $transaction_date  = $data["transaction_date"];
          $pickup_date = $data["pickup_date"];
          $request_type = $data["request_status"];
          $return_due_date = $data["return_due_date"];
          $return_date = $data["return_date"];
          $student_number = $data["student_number"];
      ?>
          <tr>
            <td><?php echo $book_title?></td>
            <td><?php echo $transaction_date?></td>
            <td><?php echo $return_due_date?></td>
            <td><?php echo $return_date?></td>
            <td><?php echo $request_type?></td>
            <?php
                if (($request_type==='REQUEST')||($request_type==='APPROVED')||($request_type === 'BORROWED')){
                    ?>
                    <td>
                <form action="student-cart.php" method="post">  
                    <input type="hidden" name="book_title" value="<?php echo $book_title?>">
                    <input type="hidden" name="transaction_id" value="<?php echo $transaction_id?>">
                    <input type="hidden" name="student_number" value="<?php echo $student_number?>">
                    <button class="btn btn-borrow" name="abort_request">ABORT REQUEST</button>
                </form>
                </td>
                <?php
                }
            ?>
          </tr>
      <?php
        }
    ?>
    </table>
</body>
</html>


<?php

if (isset($_POST['abort_request'])){
    $book_title = $_POST["book_title"];
    $transaction_id  = $_POST["transaction_id"];
    $student_number = $_POST["student_number"];

    $query = "DELETE FROM `borrow_request_student` WHERE `borrow_request_student`.`transaction_id` = $transaction_id ";
    $result = mysqli_query($con,$query);

    if ($result){
        echo '<script type="text/javascript">alert("Abort Complete!"); 
        location="student-cart.php"; </script>';
    }
}