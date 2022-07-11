<?php
  include_once '../../login/login-backend.php';
  include_once '../../database/database_connection.php';
  include_once 'home-instructor-backend.php';
  include_once 'instructor-nav-bar.php';
  $user_data = check_if_instructor_login($con)
?>
      <div class="welcome-title">

        <div class="wt-text">
          <p id="wt1">Welcome to</p>
          <p id="wt2">CvSU - IMUS CAMPUS</p>
          <p id="wt3"> ONLINE LIBRARY </p>
          <?php
            $user_name = $user_data['instructor_name'];
            echo "<p class='user'>" .$user_name. "</p>";
          ?>
        </div>

        <div class="wt-btns">
          <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-books.php"><button id="bt1">Books</button></a>
          <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-thesis.php"><button id="bt2">Thesis</button></a>
        </div>
      </div>
  </body>
</html>
