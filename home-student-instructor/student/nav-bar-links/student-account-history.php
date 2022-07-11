<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
    $student_number = $user_data["student_number"];
?>
<body>

  <div class="account-header">
    <h2>ACCOUNT / HISTORY</h2>
  </div>

    <table id="s-history">
      <tr>
        <th style="width:26%">Book Title</th>
        <th style="width:16%">Date Borrowed</th>
        <th style="width:10%">Return Schedule</th>
        <th style="width:16%">Date Returned</th>
        <th style="width:16%">Status</th>
        <th style="width:10%">Penalty</th>
        <th style="width:6%">Rate</th>
      </tr>
      <?php
        $query = "SELECT br.*, b.book_title
        FROM borrow_request_student br, book b, students s
        WHERE br.book_id=b.book_id AND br.student_number=s.student_number AND br.student_number=$student_number 
        AND request_status='RETURNED';
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
          $penalty = $data["fine"];
          $book_id = $data["book_id"];
      ?>
          <tr>
            <td><?php echo $book_title?></td>
            <td><?php echo $transaction_date?></td>
            <td><?php echo $return_due_date?></td>
            <td><?php echo $return_date?></td>
            <td><?php echo $request_type?></td>
            <td><?php echo $penalty?></td>
            <td><form action="student-rate-book-backend.php" method="post">
                    <input type="hidden" name="book_id" value="<?php echo $book_id?>">
                    <input type="hidden" name="transaction_id" value="<?php echo $transaction_id?>">
                    <button class="btn btn-borrow" name="rate_book">RATE</button>
                </form>
            </td>
      <?php
        }
    ?>
    </table>
</body>
</html>
