<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</div>  

<?php
session_start();

$con=mysqli_connect("localhost","root","","lms");
$password="";
$query="select * from `lms_data` where email='$_SESSION[email]'";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($query_run)){
 $password=$row['password'];
}
if($password == $_POST['old_password']){
    $query="UPDATE `lms_data` SET  password='$_POST[new_password]' where email='$_SESSION[email]' ";
    $query_run=mysqli_query($con,$query);
    header("Location:user_dashboard.php");
}
?>
<script> alert(" Update password successfully"); 
window.location.href= "user_dashboard.php";
</script>
<?php
else{
?>

<script> alert(" Wrong Old password "); 
window.location.href= "user_dashboard.php";
</script>
 <?php

}
?>
</div>
</body>
</html>

