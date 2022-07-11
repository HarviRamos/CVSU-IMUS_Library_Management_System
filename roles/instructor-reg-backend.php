<?php
session_start();
    include_once(dirname(__FILE__).'/../database/database_connection.php');
    include_once(dirname(__FILE__).'/../custom_functions/functions.php');
    
    if(isset($_POST["instructor_register"]))
    {
        // something is posted 
        $instructor_name = $_POST['instructor_name'];
        $instructor_email = $_POST['instructor_email'];
        $instructor_number = $_POST['instructor_number'];
        $instructor_password_1= md5($_POST['instructor_password_1']);
        $instructor_password_2= md5($_POST['instructor_password_2']);
        $instructor_department = $_POST['instructor_department'];
        $instructor_gender = $_POST['instructor_gender'];
        $instructor_contact = $_POST['instructor_contact'];

        $checking_result = password_check($instructor_password_1, $instructor_password_2);
        $data_duplication_checker = mysqli_query($con,"SELECT * FROM instructors WHERE instructor_email='$instructor_email' OR instructor_number='$instructor_number'");
        if(mysqli_num_rows($data_duplication_checker)>0)
        {
            echo("Email or Instructor Number is already taken");
            exit();
        }
        elseif($checking_result == false){
            echo("Passwords doesn't match");
            exit();
        }
        else
        {
            // Saving data to database
            $query = "insert into instructors(instructor_number,instructor_name,instructor_email,instructor_password,instructor_department,instructor_gender,instructor_contact) 
            values ('$instructor_number','$instructor_name','$instructor_email','$instructor_password_1','$instructor_department','$instructor_gender','$instructor_contact')";
            mysqli_query($con,$query);
            header("Location: ../login/login.php");
            die;
        }
        mysqli_close($con);
    }
?>