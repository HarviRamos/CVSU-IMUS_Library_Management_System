<?php
    function check_if_admin_login($con)
    {
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
        }else{
            header("Location: /../cvsu-imus-online-library/file_set/login/logout-backend.php");
            die;
        }
    }
?>