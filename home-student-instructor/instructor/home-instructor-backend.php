<?php
    function check_if_instructor_login($con)
    {
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
        }else{
            header("Location: /../cvsu-imus-online-library/file_set/login/logout-backend.php");
            die;
        }
    }
?>