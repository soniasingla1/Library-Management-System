<?php
$con = mysqli_connect("localhost", "root", "", "lms");
$query = "DELETE FROM `books` WHERE  book_no=$_GET[bn]";
$query_run = mysqli_query($con, $query);
?>
<script type="text/javascript">
    alert("Book Deleted" );
    window.location.href ="manage_book.php";
</script>