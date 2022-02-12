<?php
session_start();
$con=mysqli_connect("localhost","root","","lms");
$query="UPDATE `admins` SET name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]',address='$_POST[address]'where name='$_SESSION[name]'";
$query_run=mysqli_query($con,$query);

?>
<script type="text/javascript">
    alert("Updated Successfully");
    window.location.href= "admin_dashboard.php";
 </script>