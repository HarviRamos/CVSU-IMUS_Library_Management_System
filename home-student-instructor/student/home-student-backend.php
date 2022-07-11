<?php
    function check_if_student_login($con)
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
        }else{
            header("Location: /../cvsu-imus-online-library/file_set/login/logout-backend.php");
            die;
        }
    }
?>