<!Doctype html>
  <html class="animated fadeIn">
    <head>
      <title>Home Instructor | CVSU Imus - Online Library</title>
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/reset.css">
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/home-student-instructor.css">
    <!-- <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/books.css"> -->
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/../cvsu-imus-online-library/file_set/css/pics/favicon.png"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>

  <body>
<nav>
    <div class="logo-navbar" id="wholenavbar">

      <a href ="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/home-instructor.php"><img class="logo" src="/../cvsu-imus-online-library/file_set/css/pics/logo-text.png"></a>

      <div class="nav-bar">
          <button class="hm"><a href='/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/home-instructor.php'>Home</a></button>
            <div class="dropdown">
                <button onclick="droplib()" class="dropbtn">Library</button>
                    <div id="droplibrary" class="dropdown-content">
                        <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-books.php" id="dbooks">Books</a>
                        <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-thesis.php" id="dthesis">Thesis</a>
                    </div>
            </div>
                <button class="crt"><a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-cart.php">Cart</a></button>
                  <div class="dropdown">
                    <button onclick="dropacc()" class="dropbtn">Account</button>
                      <div id="dropaccount" class="dropdown-content">
                          <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-account-favorites.php" class ="drop-account" id="afavorites">Favorites</a>
                          <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-account-suggestion.php" class ="drop-account" id="asuggestion">Suggestion</a>
                          <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-account-history.php" class ="drop-account" id="ahistory">History</a>
                          <a href="/../cvsu-imus-online-library/file_set/home-student-instructor/instructor/nav-bar-links/instructor-account-profile.php" class ="drop-account" id="aprofile">Profile</a>
                      </div>
                  </div>
                <button class="cct"><a href="#">?</a></button>
                <button class="lo"><a href="/../cvsu-imus-online-library/file_set/login/logout-backend.php"><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a></button>
      </div>
        <br>

    </div>
    </nav>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>

            $(window).scroll(function(){
                if($(window).scrollTop()){
                    $("nav").addClass("black");
                }
                else{
                    $("nav").removeClass("black");
                }
            });
    </script>

    <script>
    function dropacc() {
  document.getElementById("dropaccount").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>

    <script>
    function droplib() {
  document.getElementById("droplibrary").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
