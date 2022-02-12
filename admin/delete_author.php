<?php
$con = mysqli_connect("localhost", "root", "", "lms");
$query = "DELETE FROM `authors` WHERE  author_id=$_GET[aid]";
$query_run = mysqli_query($con, $query);
?>
<script type="text/javascript">
    alert("Author Deleted" );
    window.location.href ="manage_author.php";
</script>