<?php
session_start();
    include '../admin-nav-bar.php';
    include '../../../database/database_connection.php';
?>
<body>

  <div class="account-header">
    <h2>TRANSACTIONS / RETURNED BOOKS</h2>
  </div>
  
    <table id="trans">
      <tr>
        <th style="width:15%">Name</th> <!--Revise design if you want to add Section-->
        <th style="width:25%">Book Title</th>
        <th style="width:10%">Date Requested</th>
        <th style="width:10%">Pick Up Date</th>
        <th style="width:10%">Return Due Date</th>
        <th style="width:10%">Return Date</th>
        <th style="width:10%">Fine</th>
      </tr>
      <?php 
        $query = "SELECT br.*, b.book_title ,s.student_name
        FROM borrow_request_student br, book b, students s
        WHERE br.book_id=b.book_id AND br.student_number=s.student_number
        AND (br.request_status='RETURNED');";
        $result = mysqli_query($con,$query);
        while ($data = mysqli_fetch_array($result)){
          $transaction_id = $data['transaction_id'];
          $book_title = $data["book_title"];    
          $transaction_date  = $data["transaction_date"];
          $pickup_date = $data["pickup_date"];
          $return_due_date = $data["return_due_date"];
          $return_date = $data["return_date"];
          $fine = $data["fine"];
          $student_name = $data["student_name"];  
      ?>
          <tr>
            <td><?php echo $student_name?></td>
            <td><?php echo $book_title?></td>
            <td><?php echo $transaction_date?></td>  
            <td><?php echo $pickup_date?></td>
            <td><?php echo $return_due_date?></td>  
            <td><?php echo $return_date?></td>  
            <td><?php echo $fine?></td>    
          </tr>   
      <?php
        }
    ?>
    </table>
</body>
</html>
