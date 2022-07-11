<?php
session_start();
    include_once(dirname(__FILE__).'/../database/database_connection.php');
    include_once(dirname(__FILE__).'/../custom_functions/functions.php');
    
    if(isset($_POST["student_register"]))  
    {
        // something is posted 
        $student_name = $_POST['student_name'];
        $student_email = $_POST['student_email'];
        $student_number = $_POST['student_number'];
        $student_password_1 = md5($_POST['student_password_1']);
        $student_password_2 = md5($_POST['student_password_2']);
        $student_course = $_POST['student_course'];
        $student_gender = $_POST['student_gender'];
        $student_contact = $_POST['student_contact'];

        $checking_result = password_check($student_password_1, $student_password_2);

        $data_duplication_checker = mysqli_query($con,"SELECT * FROM students WHERE student_email='$student_email' OR student_number='$student_number'");
        if(mysqli_num_rows($data_duplication_checker)>0)
        {
            echo("Email or Student Number is already taken");
            exit();
        }
        elseif($checking_result == false){
            echo("Passwords doesn't match");
            exit();
        }
        else
        {
            // Saving data to database
            $query = "insert into students(student_number,student_name,student_email,student_password,student_course,student_gender,student_contact) 
            values ('$student_number','$student_name','$student_email','$student_password_1','$student_course','$student_gender','$student_contact')";
            mysqli_query($con,$query);
            header("Location: ../login/login.php");
            die;
        }
        mysqli_close($con);
    }
?>