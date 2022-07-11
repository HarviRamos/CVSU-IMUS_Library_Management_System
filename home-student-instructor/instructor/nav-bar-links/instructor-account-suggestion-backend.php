<?php
session_start();
    include '../../../database/database_connection.php';    
    include '../../../custom_functions/functions.php';
    include '../home-instructor-backend.php';
    $user_data = check_if_instructor_login($con);
    
    if(isset($_POST["submit_suggestion"]))
    {
        // something is posted 
        $book_name = $_POST['book_name'];
        $comment = $_POST['comment'];
        $user_number = $user_data['instructor_number'];

        // Saving data to database
        $query = "insert into instructor_suggestion(instructor_number,book_name,comment) 
        values ('$user_number','$book_name','$comment')";
        mysqli_query($con,$query);
        header("Location: instructor-account-suggestion.php");
        die;
        mysqli_close($con);
    }
?>