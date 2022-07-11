<?php
session_start();
    include '../student-nav-bar.php';
    include '../home-student-backend.php';
    include '../../../database/database_connection.php';
    $user_data = check_if_student_login($con);
?>
<body>

  <div class="account-header">
    <h2>ACCOUNT / SUGGESTION</h2>
  </div>


<!-- FORM -->
  <form method="post" action="student-account-suggestion-backend.php">
    <div class="suggestion-container">
      <div class="book-title">
          <label style="margin-top:10px;">Book Title: </label>
          <input class="inp" type="text" id="book-title" name="book_name" style="font-size:15px; border-radius: 15px; text-align: center;"><br>
          <label style="font-family:Fashion Fetish;font-size:15px; margin-top:10px;">Why do you like this book?</label>
      </div>
      <div class="textarea">
        <textarea id="word" name="comment" oninput="countWord()" style="font-size:18px; text-align: center; margin-top: 35px;"></textarea>
      </div>
      <div class="word-submit">
        <button class="suggestion-submit" name="submit_suggestion">Submit</button>
        <p>Word Count: <span id="show">0 </span> / 100</p>
      </div>
    </div>
  </form>

    <!-- FORM END -->


    <script>
        function countWord() {

            var words = document
                .getElementById("word").value;

            var count = 0;


            var split = words.split(' ');

            for (var i = 0; i < split.length; i++) {
                if (split[i] != "") {
                    count += 1;
                }
            }

            document.getElementById("show")
                .innerHTML = count;
        }
    </script>
</body>

</html>
