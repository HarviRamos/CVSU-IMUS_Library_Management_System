<?php
session_start();
    include '../instructor-nav-bar.php';
    include '../home-instructor-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_instructor_login($con);  
    $instructor_id = $user_data["instructor_number"];
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
                                    </ul>
                                    <div class="card-body"> 
                                        <form action="instructor-borrow-books-btn-backend.php" method="post">  
                                            <input type="hidden" name="book_id" value="<?php echo $book_id?>">
                                            <input type="hidden" name="instructor" value="<?php echo $instructor_id?>">
                                            <button class="btn btn-borrow" name="borrow_book">Borrow</button>
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


