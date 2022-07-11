<?php
    function check_if_staff_login($con)
    {
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
        }else{
            header("Location: /../cvsu-imus-online-library/file_set/login/logout-backend.php");
            die;
        }
    }
?>