<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "lms");
$name = "";
$email = "";
$mobile = "";
$address = "";
$query = "select * from admins where email = '$_SESSION[email]'";
$query_run = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($query_run)) {
  $name = $row['name'];
  $email = $row['email'];
  $mobile = $row['mobile'];
  $address = $row['address'];
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


  <title>Admin Dashboard</title>
  <style>
    body {

      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font: weight 300px;
    }

    body {
      background: url(bg.jpg) no-repeat center center fixed;
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

    .form_heading {
      color: darkblack;

    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <div class="navbar-header">
        <span class="logo"> <img src="logo1.png" alt=""></span>
        <a class="navbar-brand nb" href="admin_dashboard.php">Library Management System</a>
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
        <center style="font-size:25px;text-transform:capitalize;">Welcome <?php echo $_SESSION['name']; ?> </center>
      </strong></span></font><br>

  <br><br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form>

        <div class="mb-3 row">
          <label for="staticName" class="col-sm-2 col-form-label form_heading" style="color:darkgreen;font-size:larger">Name:</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="staticName" value="<?php echo $name; ?>" disabled>
          </div>
        </div>
        <br>
        <div class="mb-3 row">
          <label for="staticEmail" class="col-sm-2 col-form-label form_heading" style="color:darkgreen;font-size:larger">Email Id:</label>
          <div class="col-sm-10">
            <input type="text" readonly class="form-control" id="staticEmail" value="<?php echo $email; ?>" disabled>
          </div>
        </div>
        <br>
        <div class="mb-3 row">
          <label for="staticMobile" class="col-sm-2 col-form-label form_heading" style="color:darkgreen;font-size:larger">Contact No:</label>
          <div class="col-sm-10">
            <input type="number" readonly class="form-control" id="staticMobile" value="<?php echo $mobile; ?>" disabled>
          </div>
        </div>
        <br>
        <div class="mb-3 row">
          <label for="staticAddress" class="col-sm-2 col-form-label form_heading" style="color:darkgreen;font-size:larger">Address:</label>
          <div class="col-sm-10">
            <textarea row="3" cols="40" readonly class="form-control" id="staticAddress" disabled><?php echo $address; ?></textarea>
          </div>
        </div>
        <br>
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