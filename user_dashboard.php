<?php
session_start();
function get_user_issue_book_count()
{
  $con = mysqli_connect("localhost", "root", "", "lms");
  $user_issue_book_count = 0;
  $query = "select count(*) as  user_issue_book_count from issued_books where student_id = '$_SESSION[student_id]'";
  $query_run = mysqli_query($con, $query);
  while ($row = mysqli_fetch_array($query_run)) {
    $user_issue_book_count = $row['user_issue_book_count'];
  }
  return ($user_issue_book_count);
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>User Dashboard</title>
  <style>
    body {

      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font: weight 300px;


    }

    body {
      background: url(background.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .heading {
      color: green;
      text-decoration: underline;
    }

    .logo {
      width: 150px;
      height: 50px;

    }

    .dd:hover {
      background-color: darkgreen;
      color: white;
    }

    .dd:active {
      background-color: darkgreen;
      color: white;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <div class="navbar-header">
        <span class="logo"> <img src="logo1.png" alt=""></span>
        <a class="navbar-brand nb" href="index.php">Library Management System</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <font style="color:white"> My Profile </font>
          </a>
          <div class="dropdown-menu ">
            <a class="dropdown-item  dd" href="view_profile.php">View Profile</a>
            <a class="dropdown-item dd" href="edit_profile.php">Edit Profile</a>
            <a class="dropdown-item dd" href="change_password.php">Change Password</a>
          </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="logout.php">
            <font style="color:white">Log out</font>
          </a></li>
      </ul>
    </div>

  </nav>
  <br>

  <font style="color:green"><span><strong>
        <center>
          <div style="font-size:25px;text-transform:capitalize;">Welcome <?php echo $_SESSION['name']; ?>
        </center>
      </strong></span></font><br>
  <span>
    <marquee><b>This is a Library Management System.Library opens at 8:00 AM and close at 5:00 PM</b></marquee>
  </span>
  <br><br>
  <div class="row">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <div class="card border-success mb-3 " style="max-width: 30rem;border: 3px solid darkgreen;">
        <div class="card-header bg-transparent border-success " style="font-size: 23px;color:darkgreen;">
          <center>Issued Books</center>
        </div>
        <div class="card-body text-success" style="border: 1px solid darkgreen;">
          <p class="card-text" style="color: darkgreen;">Number of Books:<?php echo get_user_issue_book_count(); ?> </p><br>
          <center> <a href="view_issued_book.php" class="btn btn-success" style="border: 1px solid darkgreen;"> View</a>
            <center>
        </div>
      </div>
    </div>


    <div class="col-md-4"></div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>