<?php
session_start();
    include '../../../database/database_connection.php';    
    include '../../../custom_functions/functions.php';
    include '../home-student-backend.php';
    $user_data = check_if_student_login($con);
    
    if(isset($_POST["submit_suggestion"]))
    {
        // something is posted 
        $book_name = $_POST['book_name'];
        $comment = $_POST['comment'];
        $user_number = $user_data['student_number'];

        // Saving data to database
        $query = "insert into student_suggestion(student_number,book_name,comment) 
        values ('$user_number','$book_name','$comment')";
        mysqli_query($con,$query);
        header("Location: student-account-suggestion.php");
        die;
        mysqli_close($con);
    }
?>