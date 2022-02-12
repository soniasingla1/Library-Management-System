<?php
require('functions.php');
session_start();
$con = mysqli_connect("localhost", "root", "", "lms");
               $book_id="";
                $book_no="";
                $book_name="";
                $author_id="";
                $cat_id="";
                $book_price="";
                $query = "SELECT * FROM `books` WHERE book_no=$_GET[bn]";
                $query_run = mysqli_query($con, $query);
                while ($row = mysqli_fetch_assoc($query_run)) {
                    $book_id=$row['book_id'];
                    $book_name=$row['book_name'];
                    $book_no=$row['book_no'];
                    $author_id=$row['author_id'];
                    $cat_id=$row['cat_id'];
                    $book_price=$row['book_price'];
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
     body{
           
           font-family:Verdana, Geneva, Tahoma, sans-serif;
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

    .navadmin {
      color: white;

    }

    input[type="submit"]{ 
          border:2px solid black;  
      }
      input[type="submit"]:hover{
          background-color: darkgreen;
          color:white;
      }
      .form_text{
           border:2px solid green;
       }
       .form_text:focus {
  outline: none;
  box-shadow: 2px 4px 3px 2px darkgreen;
  border:1px solid darkgreen;
}
        
        .form_heading{
           color:darkblack;

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

  
  <br>
  <br>
 <div class="row">
     <div class="col-md-2">
        
     </div>
     <div class="col-md-8">
     <h5 class="heading">
     <center style="font-size:25px;text-transform:capitalize;">Edit Book</center>
      </h5>
      <br>
     <form action="" method="post">
     <div class="mb-3 row">
   <label for="staticName" class="col-sm-2 col-form-label form_heading" style="color:darkgeen;font-size:large">Book Id:</label>
   <div class="col-sm-10">
     <input type="text"  class="form-control form_text" name="book_id" value="<?php echo $book_id; ?>"  id="staticName" required >
   </div>
   </div>
   <br>
     <div class="mb-3 row">
   <label for="staticName" class="col-sm-2 col-form-label form_heading"style="color:darkgeen;font-size:large">Book No:</label>
   <div class="col-sm-10">
     <input type="text"  class="form-control form_text" name="book_no" value="<?php echo $book_no; ?>"  id="staticName" required >
   </div>
   </div>
   <br>
   <div class="mb-3 row">
   <label for="staticName" class="col-sm-2 col-form-label form_heading"style="color:darkgeen;font-size:large">Book Name:</label>
   <div class="col-sm-10">
     <input type="text"  class="form-control form_text" name="book_name" value="<?php echo $book_name; ?>"  id="staticName" required >
   </div>
   </div>
   <br>
   <div class="mb-3 row">
   <label for="staticName" class="col-sm-2 col-form-label form_heading"style="color:darkgeen;font-size:large">Author Id:</label>
   <div class="col-sm-10">
     <input type="text"  class="form-control form_text" name="author_id" value="<?php echo $author_id; ?>"  id="staticName" required >
   </div>
   </div>
   <br>
   <div class="mb-3 row">
   <label for="staticName" class="col-sm-2 col-form-label form_heading" style="color:darkgeen;font-size:large">Category Id:</label>
   <div class="col-sm-10">
     <input type="text"  class="form-control form_text" name="cat_id" value="<?php echo $cat_id; ?>"  id="staticName" required >
   </div>
   </div>
   <br>
   <div class="mb-3 row">
   <label for="staticName" class="col-sm-2 col-form-label form_heading" style="color:darkgeen;font-size:large">Book Price:</label>
   <div class="col-sm-10">
     <input type="text"  class="form-control form_text" name="book_price" value="<?php echo  $book_price; ?>"  id="staticName" required >
   </div>
   </div>
   <br>
   
   <center><input type="submit" class="btn btn-success" name="update" value="Update " ></center>
   <?php
if(isset($_POST['update'])){
    $con = mysqli_connect("localhost", "root", "", "lms");
   
    $query = "UPDATE `books` SET `book_name`='$_POST[book_name]',`author_id`='$_POST[author_id]',`cat_id`='$_POST[cat_id]',`book_price`='$_POST[book_price]' WHERE  book_no=$_GET[bn]";
    $query_run = mysqli_query($con, $query);
   //header("location :  manage_book.php");
    }  

?>
  
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

