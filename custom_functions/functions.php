<?php
function check_login($con)
{
    if(isset($_SESSION['student_number']))
    {
        $student_number = $_SESSION['student_number']; 
        $query = "SELECT * FROM students WHERE student_number = '$student_number' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $student_data = mysqli_fetch_assoc($result);
            return $student_data;
            mysqli_close($con);
        } 
    }
    if(isset($_SESSION['instructor_number']))
    {
        $instructor_number = $_SESSION['instructor_number']; 
        $query = "SELECT * FROM instructors WHERE instructor_number = '$instructor_number' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $instructor_data = mysqli_fetch_assoc($result);
            return $instructor_data;
            mysqli_close($con);
        } 
    }
    if(isset($_SESSION['staff_number']))
    {
        $staff_number = $_SESSION['staff_number']; 
        $query = "SELECT * FROM staff WHERE staff_number = '$staff_number' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $staff_data = mysqli_fetch_assoc($result);
            return $staff_data;
            mysqli_close($con);
        } 
    }
    if(isset($_SESSION['admin_number']))
    {
        $admin_number = $_SESSION['admin_number']; 
        $query = "SELECT * FROM admins WHERE admin_number = '$admin_number' limit 1";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0)
        {
            $admin_data = mysqli_fetch_assoc($result);
            return $admin_data;
            mysqli_close($con);
        } 
    }
    // redirect to login
    header('Location: /../file_set/login/login.php');
    die;
}
function random_num($length){
    $text = ''; 
    if ($length < 5)
    {
        $length = 5;
    }
    $len = rand(4,$length);

    for ($i=0; $i < $len; $i++){
        // code 
        $text .= rand(0,9);
    }
    return $text;
}

function password_check($password1, $password2)
{
    if ($password1 !== $password2){
        return false;
    }else {
        return true;
    }
}
?>