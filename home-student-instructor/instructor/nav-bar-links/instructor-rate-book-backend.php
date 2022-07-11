<?php
session_start();
    include '../../../database/database_connection.php';    
    include '../../../custom_functions/functions.php';
    include '../home-instructor-backend.php';
    $user_data = check_if_instructor_login($con);
    
    if(isset($_POST["rate_book"]))
    {
        // something is posted 
        $book_id = $_POST['book_id'];
        $transaction_id = $_POST['transaction_id'];

        $query = "SELECT rated FROM borrow_request_instructor WHERE transaction_id=$transaction_id;";
        $data = mysqli_query($con,$query);
        $data = mysqli_fetch_array($data);
        

        if($data === 'NO'){
            $query = "SELECT book_rate FROM book WHERE book_id=$book_id;";
            $result = mysqli_query($con,$query);
            $book_data = mysqli_fetch_array($result);
            $book_old_rate = $book_data["book_rate"];

            // Calculate new data 
            $new_rate = $book_old_rate + 1;

            // Saving new data to database
            $query = "UPDATE book SET book_rate='$new_rate' WHERE book_id='$book_id';";
            mysqli_query($con,$query);
            echo '<script type="text/javascript">alert("Request successful"); 
            location="instructor-books.php"; </script>';
            die;
            mysqli_close($con);
        }else{
            echo '<script type="text/javascript">alert("You already Rated!"); 
            location="instructor-books.php"; </script>';
        }
     
    }
?>