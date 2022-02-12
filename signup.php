<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>LMS</title>
    <style>
        body{
           
           font-family:Verdana, Geneva, Tahoma, sans-serif;
           font: weight 300px;
     
            
             }
             body {
       background: url(background.jpg) no-repeat center center fixed;
       -webkit-background-size: cover;
       -moz-background-size: cover;
       -o-background-size: cover;
       background-size: cover;
     } 
         
        .heading{
         color:green;
         text-decoration: underline;
        }
        .logo{
          width: 150px;
          height:50px;

        }
        #side_bar{
          color:white;
          box-sizing:border-box; 
          border-radius: 5px;
          background-color: rgb(183, 219, 183);
          padding:50px;
          width:300px;
          height:450px;
        }input[type="password"],
        input[type="text"],
       input[type="number"],
       input[type="email"],
       textarea{
           width: 100%;
           height: 200%;
           padding:10px 25px;
           border:2px solid black;
           border-radius: 4px;
           margin:4px 3px;
       }
        .formarea{
          border:2px solid black;
          border-radius: 4px;
         
        }
        input[type="submit"]{
          
           border:2px solid black;
           
          
       }
       input[type="submit"]:hover{
           background-color: darkgreen;
           color:white;
       }
       input[type="password"] {
  font-family: Verdana;
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
    <div class="nav navbar-nav navbar-right">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link nb"  href="index.php"><font style="color:white">Admin Login</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nb" href="index.php"><font style="color:white">User Login</font></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nb " href="index.php"><font style="color:white">Register</font></a>
        </li>
         
      </ul>
     
    </div>
  </div>
</nav>
<br><br>
<span>
    <marquee> <b>Library opens at 8:00 AM and close at 5:00 PM</b></marquee>
</span>
<br><br>
 <div class="row">
     <div class="col-md-4 bg-success " id="side_bar" >
     <br>
         <h5>Library Timing</h5>
         <ul>
           <br>
             <li>Opening Timing: 8:00 AM</li>
             <li><div>Closing Timing:</div> 5:00 PM</li>
             <li>(Sunday Off)</li>  
          </ul>  
          <br> 
      </div>
    <div class="col-md-8" id="main_content">
     <center><h3 style="color:darkgreen;"> User Registration Form</h3></center>
      <hr style="padding:2px;color:darkgreen;">
     <form action="register.php" method="post">
       <div class="container" style="color:darkgreen;font-style:larger">
     
      Name:<br>
      <input type="text" name="name"  placeholder="Enter your name" class="formarea" required >
      <br><br>
     
       Email:<br>
       <input type="email" name="email" placeholder="Enter your email" class="formarea" required >
       <br><br>
       Password:<br>
      <input type="password" name="password" placeholder="Enter your password" class="formarea" required >
      <br><br>
       Mobile Number:<br>
       <input type="text" name="mobile" placeholder="Enter your number"class="formarea" required>
       <br><br>
        Address:<br>
      <textarea name="textaddress" cols="40" rows="3" placeholder="Enter your address" class="formarea" required></textarea>
       <br><br>
      <center>  <input type="submit" class="btn btn-success" value="Register"></center>
      </div>
</form>

    </div>
  
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