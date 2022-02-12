<?php
require('functions.php');
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>Admin Dashboard</title>
  <style>
    body {

      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font: weight 300px;
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

    .navadmin {
      color: white;

    }


    .navcontaineradmin {
      background-color: #d2ddd8;


    }

    .navclassadmin {
      padding: 0px;
    }

    .navitem:hover {
      background-color: #70be9a;
    }

    .navitem:active {
      background-color: #70be9a;
    }

    .card1 {
      margin-left: 50px;
      margin-bottom: 70px;
      margin-top: 40px;
      margin-right: 20px;
      border: 3px solid darkgreen;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <div class="navbar-header">
        <span class="logo"> <img src="logo1.png" alt=""></span>
        <a class="navbar-brand nb" href="index.php"> Library Management System</a>
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
        <li class="nav-item"><a class="nav-link" href="../logout.php">
            <font style="color:white">Log out</font>
          </a></li>
      </ul>
    </div>

  </nav>

  <nav class="navbar navbar-expand-lg navbar-light bg-light navclassadmin">
    <div class="container-fluid navcontaineradmin">
      <a class="navbar-brand navadmin" href="admin_dashboard">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Books
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item navitem" href="add_book.php">Add New Books</a></li>
              <li><a class="dropdown-item navitem" href="manage_book.php">Manage Books</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item navitem" href="add_cat.php">Add New Categories</a></li>
              <li><a class="dropdown-item navitem" href="manage_category.php">Manage Categories</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarScrollingDropdown " role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Author
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item navitem" href="add_author.php">Add New Authors</a></li>
              <li><a class="dropdown-item navitem" href="manage_author.php">Manage Authors</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Issue Books</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <br><BR>
  <font style="color:green"><span><strong>
        <center style="font-size:25px;text-transform:capitalize;text-decoration:underline">
          REGISTER USERS
        </center>
      </strong></span></font><br>

  <br><br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form>
        <table class="table  table-success table-striped" width="900px" style="text-align:center;border: 3px solid green;">
          <thead>
            <tr>
              <th scope="col">Sr No:</th>
              <th scope="col">Name:</th>
              <th scope="col">Email Id:</th>
              <th scope="col">Mobile:</th>
              <th scope="col">Address:</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              $con = mysqli_connect("localhost", "root", "", "lms");
              $srno = "";
              $name = "";
              $email = "";
              $password = "";
              $mobile = "";
              $address = "";

              $query = "select * from lms_data ";
              $query_run = mysqli_query($con, $query);
              while ($row = mysqli_fetch_assoc($query_run)) {
                $srno = $row['srno'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $address = $row['address'];

              ?>
            <tr>
              <td><?php echo $srno; ?></td>
              <td><?php echo $name; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $mobile ?></td>
              <td><?php echo $address; ?></td>
            </tr>
          <?php
              }
          ?>
          </tbody>
        </table>
      </form>
    </div>
    <div class="col-md-2"></div>
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