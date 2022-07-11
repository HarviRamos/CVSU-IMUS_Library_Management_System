<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con); 
?>

<div class="container py-2" style="margin-top:100px;">
            <div class="row mt-2">
                <?php
                    $query = "SELECT * FROM thesis";
                    $run_query = mysqli_query($con,$query);
                    while ($thesis_data = mysqli_fetch_array($run_query)){
                        $thesis_title = $thesis_data['thesis_title'];
                        $thesis_file = $thesis_data['thesis_file'];
                        $author = $thesis_data['authors'];
                        $date_published = $thesis_data['date_published'];
                        $thesis_rate = $thesis_data['thesis_rate'];
                        ?>
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">Thesis Title: <?php echo $thesis_title?></h5>
                                    </div>
                                <ul class="list-group list-group-flush" style="list-style:none">
                                    <li class="list-group-item">Author: <?php echo $author  ?></li>
                                    <li class="list-group-item">Date Published: <?php echo $date_published  ?></li>
                                    <li class="list-group-item">Recommended By: <?php echo $thesis_rate  ?></li>
                                </ul>
                                <div class="card-body">
                                <form action="student-view-thesis-btn-backend.php" method="post" >
                                    <input type="hidden" name="thesis_file" value="<?php echo $thesis_file?>">
                                    <button class="btn btn-borrow" name="view_thesis">View</button>
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


