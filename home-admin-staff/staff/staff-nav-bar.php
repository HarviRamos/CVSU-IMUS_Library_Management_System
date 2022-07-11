<!Doctype html>
  <html class="animated fadeIn">
    <head>
      <title>Home Admin | CVSU Imus - Online Library</title>
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/reset.css">
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/home-admin-staff.css">
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/home-admin-staff2.css">
    <!-- <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/books.css"> -->
    <link rel="stylesheet" href="/../cvsu-imus-online-library/file_set/css/animate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="/../cvsu-imus-online-library/file_set/css/pics/favicon.png"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>

<!-- NAVIGATION BAR -->
    <body>
      <nav>
          <div class="logo-navbar" id="wholenavbar">

            <a href ="/../cvsu-imus-online-library/file_set/home-admin-staff/admin/home-staff.php"><img class="logo" src="/../cvsu-imus-online-library/file_set/css/pics/logo-text.png"></a>

            <div class="nav-bar">

                <button class="hm"><a href='/../cvsu-imus-online-library/file_set/home-admin-staff/staff/home-staff.php'>Home</a></button>

                  <div class="dropdown">
                      <button onclick="droplibrary()" class="dropbtn">Library</button>
                          <div id="droplib" class="dropdown-content-lib">
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/staff-view-books.php" id="dbooks">Books</a>
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/staff-view-thesis.php" id="dthesis">Thesis</a>
                          </div>
                  </div>

                  <div class="dropdown">
                      <button onclick="droprecords()" class="dropbtn">Records</button>
                          <div id="droprec" class="dropdown-content-rec">
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/staff-records-students.php" id="dstudents">Students</a>
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/staff-records-instructors.php" id="dinstructors">Instructors</a>
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/staff-records-suggestions.php" id="dsuggestions">Suggestions</a>
                          </div>
                  </div>

                  <div class="dropdown">
                      <button onclick="droptransactions()" class="transbtn">Transactions</button>
                          <div id="droptransac" class="dropdown-content-trans">
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/book-request.php" id="drequest">Book Requests</a>
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/book-approved-request.php" id="drequest">Book Approved Requests</a>
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/borrowed-books.php" id="dborrowed">Borrowed Books</a>
                              <a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/returned-books.php" id="dreturned">Returned Books</a>
                          </div>
                  </div>

                      <button class="acn"><a href="/../cvsu-imus-online-library/file_set/home-admin-staff/staff/nav-bar-links/staff-account-profile.php">Account</a></button>
                      <button class="notif"><a href="#"><i class="fa fa-bell fa-lg" aria-hidden="true"></i></a></button>
                      <button class="cct"><a href="#">?</a></button>
                      <button class="lo"><a href="/../cvsu-imus-online-library/file_set/login/logout-backend.php"><i class="fa fa-power-off fa-lg" aria-hidden="true"></i></a></button>
            </div>
              <br>

          </div>
          </nav>
<!-- NAVIGATION BAR END -->

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
  function droplibrary() {
  document.getElementById("droplib").classList.toggle("show");
  }

  // Close the dropdown menu if the user clicks outside of it
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
  var dropdowns = document.getElementsByClassName("dropdown-content-lib");
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
  function droprecords() {
  document.getElementById("droprec").classList.toggle("show");
  }
  window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
  var dropdowns = document.getElementsByClassName("dropdown-content-rec");
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
  function droptransactions() {
  document.getElementById("droptransac").classList.toggle("show");
  }

  window.onclick = function(event) {
  if (!event.target.matches('.transbtn')) {
  var dropdowns = document.getElementsByClassName("dropdown-content-trans");
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
