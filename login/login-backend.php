<?php
session_start();
    include_once(dirname(__FILE__).'/../database/database_connection.php');
    include_once(dirname(__FILE__).'/../custom_functions/functions.php');   

    if(isset($_POST['user_login']))
    {
        // something is posted 
        $user_role = $_POST['user_role'];
        $user_email = $_POST['user_email'];
        $user_password = md5($_POST['user_password']);

        if(!empty($user_email) && !empty($user_password) && !is_numeric($user_email)){
            if($user_role === "students"){
                $query_for_student = "SELECT * FROM students WHERE student_email = '$user_email' and student_password ='$user_password' limit 1";
                $result_for_student =  mysqli_query($con,$query_for_student);
                if($result_for_student && mysqli_num_rows($result_for_student) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result_for_student);
                    if($user_data['student_password'] === $user_password && $user_data['student_email'] === $user_email)
                    {
                        $_SESSION['student_number'] = $user_data['student_number'];
                        header("Location: ../home-student-instructor/student/home-student.php");
                        mysqli_close($con);
                        die;
                    }
                    else{
                        echo '<script type="text/javascript">alert("WRONG USERNAME OR PASSWORD!");    
                        location="login.php"; </script>';
                        mysqli_close($con);
                    }   
                }
                else
                {
                    echo '<script type="text/javascript">alert("ACCOUNT DOESN`T EXIST!");    
                    location="login.php"; </script>';
                    mysqli_close($con);
                }
            }
            if($user_role === "instructors"){
                $query_for_instructor = "SELECT * FROM instructors WHERE instructor_email = '$user_email' and instructor_password ='$user_password' limit 1";
                $result_for_instructor =  mysqli_query($con,$query_for_instructor);
                if($result_for_instructor && mysqli_num_rows($result_for_instructor) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result_for_instructor);
                    if($user_data['instructor_password'] === $user_password && $user_data['instructor_email'] === $user_email)
                    {
                        $_SESSION['instructor_number'] = $user_data['instructor_number'];
                        $_SESSION['user_role'] = 'instructor';
                        header("Location: ../home-student-instructor/instructor/home-instructor.php");
                        mysqli_close($con);
                        die;
                    } 
                    else{
                        echo '<script type="text/javascript">alert("WRONG USERNAME OR PASSWORD!");    
                        location="login.php"; </script>';
                        mysqli_close($con);
                    }  
                }
                else
                {
                    echo '<script type="text/javascript">alert("ACCOUNT DOESN`T EXIST!");    
                    location="login.php"; </script>';
                    mysqli_close($con);
                }
            }
            if($user_role === "staffs"){
                $query_for_staff = "SELECT * FROM staff WHERE staff_email = '$user_email' and staff_password ='$user_password' limit 1";
                $result_for_staff =  mysqli_query($con,$query_for_staff);
                if($result_for_staff && mysqli_num_rows($result_for_staff) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result_for_staff);
                    if($user_data['staff_password'] === $user_password && $user_data['staff_email'] === $user_email)
                    {
                        $_SESSION['staff_number'] = $user_data['staff_number'];
                        $_SESSION['user_role'] = 'staff';
                        header("Location: ../home-admin-staff/staff/home-staff.php");
                        mysqli_close($con);
                        die;
                    } 
                    else{
                        echo '<script type="text/javascript">alert("WRONG USERNAME OR PASSWORD!");    
                        location="login.php"; </script>';
                        mysqli_close($con);
                    }  
                }
                else
                {
                    echo '<script type="text/javascript">alert("ACCOUNT DOESN`T EXIST!");    
                    location="login.php"; </script>';
                    mysqli_close($con);
                }
            }
            if($user_role === "admins"){
                $query_for_admin = "SELECT * FROM admins WHERE admin_email = '$user_email' and admin_password ='$user_password' limit 1";
                $result_for_admin =  mysqli_query($con,$query_for_admin);
                if($result_for_admin && mysqli_num_rows($result_for_admin) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result_for_admin);
                    if($user_data['admin_password'] === $user_password && $user_data['admin_email'] === $user_email)
                    {
                        $_SESSION['admin_number'] = $user_data['admin_number'];
                        $_SESSION['user_role'] = 'admins';
                        header("Location: ../home-admin-staff/admin/home-admin.php");
                        mysqli_close($con);
                        die;
                    } 
                    else{
                        echo '<script type="text/javascript">alert("WRONG USERNAME OR PASSWORD!");    
                        location="login.php"; </script>';
                        mysqli_close($con);
                    }  
                }
                else
                {
                    echo '<script type="text/javascript">alert("ACCOUNT DOESN`T EXIST!");    
                    location="login.php"; </script>';
                    mysqli_close($con);
                }
            }else{
                die();
            }
        }
    }
?>