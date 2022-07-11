<?php
session_start();
    include '../staff-nav-bar.php';
    include '../../../database/database_connection.php';
    include '../home-staff-backend.php';
    $user_data = check_if_staff_login($con); 
    $staff_number = $user_data["staff_number"];
?>
        <div class="container py-2" style="margin-top:100px;">
            <div class="row mt-2">
                <?php
                    $query = "SELECT * FROM book";
                    $run_query = mysqli_query($con,$query);
                    while ($book_data = mysqli_fetch_array($run_query)){
                        $book_id = $book_data['book_id'];
                        $book_title = $book_data['book_title'];
                        $title_photo_location = $book_data['title_photo_location'];
                        $ISBN_number = $book_data['ISBN_number'];
                        $author = $book_data['author'];
                        $date_published = $book_data['date_published'];
                        $number_of_stocks = $book_data['number_of_stocks'];
                        $book_rate = $book_data['book_rate'];
                        $rack_number = $book_data['rack_number'];
                        $rack_level_number = $book_data['rack_level_number'];
                        ?>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="<?php echo $title_photo_location ?>" alt="Card image cap" width="400px" height="400px">
                                        <div class="card-body">
                                            <h5 class="card-title">Book Title: <br><?php echo $book_title ?></h5>
                                        </div>
                                    <ul class="list-group list-group-flush" style="list-style:none">
                                        <li class="list-group-item">ISBN Number: <?php echo $ISBN_number ?></li>
                                        <li class="list-group-item">Author: <?php echo $author  ?></li>
                                        <li class="list-group-item">Date Published: <?php echo $date_published  ?></li>
                                        <li class="list-group-item">Stocks: <?php echo $number_of_stocks  ?></li>
                                        <li class="list-group-item">Recommended By: <?php echo $book_rate  ?> Student/s</li>
                                        <li class="list-group-item">Rack Number: <?php echo $rack_number ?></li>
                                        <li class="list-group-item">Rack Level Number: <?php echo $rack_level_number?></li>
                                    </ul>
                                    <div class="card-body"> 
                                        <form action="admin-view-books.php" method="post">  
                                            <input type="hidden" name="book_id" value="<?php echo $book_id?>">
                                            <button class="btn btn-borrow" name="delete_book">Delete</button>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    <?php
                    }
                ?>   
            </div> 
        </div>
    </body>
</html> 

<?php

if(isset($_POST["delete_book"])){
    $book_id = $_POST['book_id'];
    $request_status = "REQUEST";

    $query = "SELECT * FROM borrow_request_transaction WHERE book_id=$book_id";
    $result = mysqli_query($con, $query);

    if(isset($book_id)){
        $safe = 1;
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $request_type = $row['request_status'];
                if (($request_type === 'REQUEST')){
                    echo '<script type="text/javascript">alert("UNABLE TO DELETE BECAUSE THE BOOK IS STILL IN TRANSACTIONS!"); 
                    location="admin-view-books.php"; </script>';
                    $safe = $safe + 1;
                    break;
                    
                }
                if (($request_type === 'APPROVED')){
                    echo '<script type="text/javascript">alert("UNABLE TO DELETE BECAUSE THE BOOK IS STILL IN TRANSACTIONS!"); 
                    location="admin-view-books.php"; </script>';
                    $safe = $safe + 1;
                    break;
                    
                }
                if (($request_type === 'BORROWED')){
                    echo '<script type="text/javascript">alert("UNABLE TO DELETE BECAUSE THE BOOK IS STILL IN TRANSACTIONS!"); 
                    location="admin-view-books.php"; </script>';
                    $safe = $safe + 1;
                    break;
                    
                }
                if (($request_type === 'PENDING')){
                    echo '<script type="text/javascript">alert("UNABLE TO DELETE BECAUSE THE BOOK IS STILL IN TRANSACTIONS!"); 
                    location="admin-view-books.php"; </script>';
                    $safe = $safe + 1;
                    break;
                    
                }
                if (($request_type === 'RETURNED')){
                    continue;
                }
            }
            if (($safe === 1) && (mysqli_num_rows($result) > 0)){
                $query = "DELETE FROM book WHERE book_id=$book_id";
                mysqli_query($con,$query);
                echo '<script type="text/javascript">alert("SUCCESSFULL!"); 
                location="admin-view-books.php"; </script>';
                die;
                mysqli_close($con); 
            }
        }
        else{
            $query = "DELETE FROM book WHERE book_id=$book_id";
            mysqli_query($con,$query);
            echo '<script type="text/javascript">alert("SUCCESSFULL!"); 
            location="admin-view-books.php"; </script>';
            die;
            mysqli_close($con);
        }
    }else{
        echo '<script type="text/javascript">alert("Book ID is missing!"); 
        location="student-books.php"; </script>';
    }
}