<?php
  include '../../login/login-backend.php';
  include '../../database/database_connection.php';
  include 'home-staff-backend.php';
  include 'staff-nav-bar.php';
  $user_data = check_if_staff_login($con);
?>
<body>
  <!-- MAIN UI -->
      <div class="welcome-title">

        <div class="wt-text">
          <p id="wt1">Welcome to</p>
          <p id="wt2">CvSU - IMUS CAMPUS</p>
          <p id="wt3"> ONLINE LIBRARY </p>
          <?php
            $user_name = $user_data['staff_name'];
            echo "<p class='user'>" .$user_name. "</p>";
          ?>
        </div>

        <div class="wt-btns">
          <a href="#"><button id="bt1">Add Books</button></a>
          <a href="#"><button id="bt2">Add Thesis</button></a>
        </div>
      </div>
  <!-- MAIN UI END -->

  <!-- ADD BOOKS CONTAINER -->

  <form action="home-staff-buttons/staff-add-book-backend.php" method="post" enctype="multipart/form-data">
          <div class="add-books" id="add-b">
            <div class="a-b-container">
              <span class="close">&times;</span><p class="btn-header">Add Book:</p>
                <div class="a-b-items">

                    <div class="a-b-inputs" id="b-title">
                      <label>Book Title: </label>
                      <input class="inp" type = "text" id = "book-title" name = "book_title" style="font-size:18px;" required><br>
                    </div>
                    <div class="a-b-inputs" id="b-wrapper1">
                        <label>Author: </label>
                        <input class="inp" type = "text" id = "book-author" name = "author" style="font-size:18px;" required>

                        <label>ISBN: </label>
                        <input class="inp" type = "text" id = "book-isbn" name = "ISBN_number" style="font-size:18px;" required>
                    </div>

                  <div class="a-b-inputs" id="b-wrapper2">
                    <label><br>Date Published: </label>
                    <input class="inp" type = "date" id = "book-date" name = "date_published" style="font-size:18px;" required>

                      <label>No. of Books: </label>
                      <input class="inp" type = "text" id = "book-stocks" name = "number_of_stocks" style="font-size:18px;" required>

                      <label>Rack Number: </label>
                      <input class="inp" type = "text" id = "book-stocks" name = "rack_number" style="font-size:18px;" required>

                      <label>Rack Level Number: </label>
                      <input class="inp" type = "text" id = "book-stocks" name = "rack_level_number" style="font-size:18px;" required>


                    </div>

                      <label>Designated Department: </label>
                        <select class="inp" name="department_id" id="department_id" required style="font-size:18px;" required>
                            <!--<option value="g1" disabled selected hidden>- - -</option>
                            <option name="department_id" value="BSCS">Bachelor of Science in Computer Science</option>
                            <option name="department_id" value="BSBM">Bachelor of Science in Business Management</option>
                            <option name="department_id" value="BSE">Bachelor of Science in Entrepreneurship</option>
                            <option name="department_id" value="BSIT">Bachelor of Science in Information Technology</option>
                            <option name="department_id" value="BSHRM">Bachelor of Science in Hotel and Restaurant Management</option>
                            <option name="department_id" value="BSOA">Bachelor of Science in Office Administration</option>
                            <option name="department_id" value="BSSE">Bachelor of Science in Secondary Education</option> --->
                            <option value="g1" disabled selected hidden>- - -</option>
                            <option name="department_id" value="0">Department of Development Studies</option>
                            <option name="department_id" value="1">Department of Biological and Physical Sciences</option>
                            <option name="department_id" value="2">Department of Computer Studies</option>
                            <option name="department_id" value="3">Department of Entrepreneurship</option>
                            <option name="department_id" value="4">Department of Hospitality Management</option>
                            <option name="department_id" value="5">Department of Languages and Mass Communication</option>
                            <option name="department_id" value="6">Department of Management</option>
                            <option name="department_id" value="7">Department of Social Science and Humanities</option>
                            <option name="department_id" value="8">Physical Education Department</option>
                            <option name="department_id" value="9">Teachers Education Department</option>
                        </select>


                  <div class="a-b-inputs" id="b-img">

                    <label for="b-add-img1" class="custom-file-upload">
                        <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                    </label>
                    <input id="b-add-img1" type="file" name="title_photo_location" required>

                    <label for="b-add-img2" class="custom-file-upload">
                        <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                    </label>
                    <input id="b-add-img2" type="file" name="overview_photo_location" required>

                    <label for="b-add-img3" class="custom-file-upload">
                        <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add Image
                    </label>
                    <input id="b-add-img3" type="file" name="table_of_contents_location" required>
                  </div>

                  <input type="submit" name="submit_book" value ="Add Book" id="b-submit">

                  </div>
              </div>
          </div>
  </form>

  <!-- ADD BOOKS CONTAINER END -->

  <!-- ADD THESIS CONTAINER -->

  <form action="home-staff-buttons/staff-add-thesis-backend.php" method="post" enctype="multipart/form-data">
            <div class="add-thesis" id="add-t">
              <div class="a-t-container">
                <span class="close2">&times;</span><p class="btn-header">Add Thesis:</p>
                  <div class="a-t-items">

                      <div class="a-t-inputs" id="t-title">
                        <label>Thesis Title: </label>
                        <input class="inp" type = "text" id = "thesis-title" name = "thesis_title" style="font-size:18px;" required>
                      </div>

                      <div class="a-t-inputs" id="t-wrapper1">
                          <label>Owner/s: </label>
                          <input class="inp" type = "text" id = "thesis-owner" name = "thesis_owner" style="font-size:18px;" required>
                      </div>

                      <div class="a-t-inputs" id="t-wrapper2">
                          <label>Designated Course: </label>
                            <select class="inp" name="t-course" id="t-course" required style="font-size:18px;" required>
                              <option value="g1" disabled selected hidden>- - -</option>
                              <option name="t-course" value="1">Bachelor of Science in Computer Science</option>
                              <option name="t-course" value="2">Bachelor of Science in Information Technology</option>
                              <option name="t-course" value="3">Bachelor of Arts in Journalism</option>
                              <option name="t-course" value="4">Bachelor of Early Childhood Education</option>
                              <option name="t-course" value="5">Bachelor of Elementary Education</option>
                              <option name="t-course" value="6">Bachelor of Science in Business Management</option>
                              <option name="t-course" value="7">Bachelor of Science in Entrepreneurship</option>
                              <option name="t-course" value="8">Bachelor of Science in Hospitality Management</option>
                              <option name="t-course" value="9">Bachelor of Science in Office Administration</option>
                              <option name="t-course" value="10">Bachelor of Science in Psychology</option>
                              <option name="t-course" value="11 ">Bachelor of Secondary Education</option>
                              <option name="t-course" value="12">Bachelor of Secondary Education Major in English</option>
                              <option name="t-course" value="13">Bachelor of Secondary Education Major in Mathematics</option>
                              <option name="t-course" value="14">Teacher Certificate Program</option>
                              <option name="t-course" value="15">Master in Professional Studies</option>
                              <option name="t-course" value="16">Master of Arts in Education</option>
                              <option name="t-course" value="17">Master of Business Administration</option>

                            </select>
                      </div>

                      <div class="a-t-inputs" id="t-wrapper3">
                          <label>Date Published: </label>
                          <input class="inp" type = "date" id = "thesis-date" name="date_published" style="font-size:18px;" required>
                      </div>

                    <div class="a-t-inputs" id="t-img">

                      <label for="t-add-img1" class="custom-file-upload2">
                          <i class="fa fa-file-image-o fa-3x" aria-hidden="true"></i><br>Add File
                      </label>
                      <input id="t-add-img1" name="t_file" type="file" required>
                    </div>

                    <input type="submit" name="submit_thesis" value ="Add Thesis" id="t-submit">

                    </div>
                </div>
            </div>
  </form>

  <!-- ADD THESIS CONTAINER END -->
  </body>

  <!-- JAVA SCRIPT FOR ADDING CONTAINERS -->
      <script>
          var modal1 = document.getElementById("add-b");
          var modal2 = document.getElementById("add-t");
          var btn1 = document.getElementById("bt1");
          var btn2 = document.getElementById("bt2");
          var span1 = document.getElementsByClassName("close")[0];
          var span2 = document.getElementsByClassName("close2")[0];

          // books
          btn1.onclick = function() {
            modal1.style.display = "block";
          }

          span1.onclick = function() {
            modal1.style.display = "none";
          }

          window.onclick = function(event) {
            if (event.target == modal1) {
              modal1.style.display = "none";
            }
          }

          // thesis
          btn2.onclick = function() {
            modal2.style.display = "block";
          }

          span2.onclick = function() {
            modal2.style.display = "none";
          }

          window.onclick = function(event) {
            if (event.target == modal2) {
              modal2.style.display = "none";
            }
          }

      </script>
  </html>
