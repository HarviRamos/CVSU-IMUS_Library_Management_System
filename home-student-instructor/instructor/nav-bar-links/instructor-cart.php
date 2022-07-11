<?php
session_start();
    include '../instructor-nav-bar.php';
    include '../home-instructor-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_instructor_login($con);
    $instructor_number = $user_data["instructor_number"];  
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
        FROM borrow_request_instructor br, book b, instructors i
        WHERE br.book_id=b.book_id AND br.instructor_number=i.instructor_number AND br.instructor_number=$instructor_number 
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
          $instructor_number = $data["instructor_number"];
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
                <form action="instructor-cart.php" method="post">  
                    <input type="hidden" name="book_title" value="<?php echo $book_title?>">
                    <input type="hidden" name="transaction_id" value="<?php echo $transaction_id?>">
                    <input type="hidden" name="instructor_number" value="<?php echo $instructor_number?>">
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
    $instructor_number = $_POST["instructor_number"];

    $query = "DELETE FROM `borrow_request_instructor` WHERE `borrow_request_instructor`.`transaction_id` = $transaction_id ";
    $result = mysqli_query($con,$query);

    if ($result){
        echo '<script type="text/javascript">alert("Abort Complete!"); 
        location="instructor-cart.php"; </script>';
    }
}