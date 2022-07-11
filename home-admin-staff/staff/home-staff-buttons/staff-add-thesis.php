<?php
session_start();
    //include '../../staff/staff-nav-bar.php';
    include '../../staff/home-staff-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_staff_login($con);
?>   
        <form action="staff-add-thesis-backend.php" 
        method="post" enctype="multipart/form-data">
            <div class=""> 
                <h2>DESIGNATED COURSE</h2>
                <select name="course_id" id="crs" required>
                        <option value="g1" disabled selected hidden>- - -</option>
                        <option name="course_id" value="1">Bachelor of Arts in Journalism</option>
                        <option name="course_id" value="2">Bachelor of Early Childhood Education</option>
                        <option name="course_id" value="3">Bachelor of Elementary Education</option>
                        <option name="course_id" value="4">Bachelor of Science in Business Management</option>
                        <option name="course_id" value="5">Bachelor of Science in Computer Science</option>
                        <option name="course_id" value="6">Bachelor of Science in Entrepreneurship</option>
                        <option name="course_id" value="7">Bachelor of Science in Hospitality Management</option>
                        <option name="course_id" value="8">Bachelor of Science in Information Technology</option>
                        <option name="course_id" value="9">Bachelor of Science in Office Administration</option>
                        <option name="course_id" value="10">Bachelor of Science in Psychology</option>
                        <option name="course_id" value="11">Bachelor of Secondary Education</option>
                        <option name="course_id" value="12">Teacher Certificate Program</option>
                        <option name="course_id" value="13">Master in Professional Studies</option>
                        <option name="course_id" value="14">Master of Arts in Education</option>
                        <option name="course_id" value="15">Master of Business Administration</option>
                </select>
            </div>
            <div class="">
                <h2>THESIS TITLE</h2>
                <input class="input-field" type="text" name="thesis_title">
            </div>
            <div class="">
                <h2>THESIS PDF FILE</h2>
                <input class="input-field" type="file" name="thesis_file" accept="application/pdf">
            </div>
            <div class="">
                <h2>AUTHORS</h2>  
                <input class="input-field" type="text" name="authors">
            </div>
            <div class="">
                <h2>DATE OF PUBLISHED</h2>  
                <input class="input-field" type="date" name="date_published"> 
            </div>
            <div class="">
                <h2>STOCKS</h2>
                <input class="input-field" type="text" name="number_of_stocks">
            </div>
            <button type="submit" name="submit">UPLOAD</button>
        </form>
    </body>
</html>