<?php
session_start();
    include '../../../database/database_connection.php';    
    include '../../../custom_functions/functions.php';
    include '../home-instructor-backend.php';
    $user_data = check_if_instructor_login($con);
    
    if(isset($_POST["borrow_book"])){
        $book_id = $_POST['book_id'];
        $instructor_id = $user_data['instructor_number'];
        $request_status = "REQUEST";

        $query = "SELECT * FROM borrow_request_instructor WHERE instructor_number = $instructor_id";
        $result = mysqli_query($con, $query);

        

        if(isset($book_id) && isset($instructor_id)){
            $safe = 1;
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $request_type = $row['request_status'];
                    if (($request_type === 'REQUEST')){
                        echo '<script type="text/javascript">alert("You can only REQUEST one Book!\nPlease CANCEL request and try again!"); 
                        location="instructor-books.php"; </script>';
                        $safe = $safe + 1;
                        break;
                        
                    }
                    if (($request_type === 'APPROVED')){
                        echo '<script type="text/javascript">alert("You can only REQUEST one Book!\nYour last request has been APPROVED!"); 
                        location="instructor-books.php"; </script>';
                        $safe = $safe + 1;
                        break;
                        
                    }
                    if (($request_type === 'BORROWED')){
                        echo '<script type="text/javascript">alert("You can only REQUEST one Book!\nPlease RETURN the Book and try again!"); 
                        location="instructor-books.php"; </script>';
                        $safe = $safe + 1;
                        break;
                        
                    }
                    if (($request_type === 'PENDING')){
                        echo '<script type="text/javascript">alert("You can only REQUEST one Book!\nPlease RETURN the Book ASAP or your fine will continously increase!"); 
                        location="instructor-books.php"; </script>';
                        $safe = $safe + 1;
                        break;
                        
                    }
                    if (($request_type === 'RETURNED')){
                        continue;
                    }
                }
                if (($safe === 1) && (mysqli_num_rows($result) > 0)){
                    $query = "insert into borrow_request_instructor(book_id,instructor_number,request_status) 
                    values ('$book_id','$instructor_id','$request_status')";
                    mysqli_query($con,$query);
                    echo '<script type="text/javascript">alert("Request is SUCCESSFULLY sent!"); 
                    location="instructor-cart.php"; </script>';
                    die;
                    mysqli_close($con); 
                }
            }
            else{
                $query = "insert into borrow_request_instructor(book_id,instructor_number,request_status) 
                values ('$book_id','$instructor_id','$request_status')";
                mysqli_query($con,$query);
                echo '<script type="text/javascript">alert("Request is SUCCESSFULLY sent!"); 
                location="instructor-cart.php"; </script>';
                die;
                mysqli_close($con);
            }
        }else{
            echo '<script type="text/javascript">alert("Book ID or Instructor ID is missing!"); 
            location="instructor-books.php"; </script>';
        }
    }
?>