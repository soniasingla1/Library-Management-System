<?php
$con = mysqli_connect("localhost", "root", "", "lms");
$query = "DELETE FROM `category` WHERE cat_id=$_GET[cid]";
$query_run = mysqli_query($con, $query);
?>
<script type="text/javascript">
    alert("Category Deleted");
    window.location.href ="manage_category.php";
</script>