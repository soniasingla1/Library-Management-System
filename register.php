<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=(int)$_POST['password'];
$mobile=(int)$_POST['mobile'];
$address=$_POST['textaddress'];

$con=mysqli_connect("localhost","root","","lms");
$query="insert into lms_data (`name`, `email`, `password`, `mobile`, `address`) values('$name','$email','$password','$mobile','$address')";
$query_run=mysqli_query($con,$query);


?>
<script>
    alert("Registered Successfully");
window.location.href= "user_dashboard.php";

    </script>
