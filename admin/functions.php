<?php

  function get_user_count(){
    $con=mysqli_connect("localhost","root","","lms");
    $user_count="";
    $query="select count(*) as user_count from lms_data";
   $query_run=mysqli_query($con,$query);
  
   while($row = mysqli_fetch_array( $query_run)){
       $user_count=$row['user_count'];
  }
  return($user_count);
}
function get_book_count(){
    $con=mysqli_connect("localhost","root","","lms");
    $book_count="";
    $query="select count(*) as book_count from books";
   $query_run=mysqli_query($con,$query);
  
   while($row = mysqli_fetch_array( $query_run)){
       $book_count=$row['book_count'];
  }
  return($book_count);
}
function get_cat_count(){
    $con=mysqli_connect("localhost","root","","lms");
    $cat_count="";
    $query="select count(*) as cat_count from category";
   $query_run=mysqli_query($con,$query);
  
   while($row = mysqli_fetch_array( $query_run)){
       $cat_count=$row['cat_count'];
  }
  return($cat_count);
}
function get_author_count(){
    $con=mysqli_connect("localhost","root","","lms");
    $author_count="";
    $query="select count(*) as author_count from authors";
   $query_run=mysqli_query($con,$query);
  
   while($row = mysqli_fetch_array( $query_run)){
       $author_count=$row['author_count'];
  }
  return($author_count);
}
function get_issued_book_count(){
    $con=mysqli_connect("localhost","root","","lms");
    $issued_book_count="";
    $query="select count(*) as issued_book_count from issued_books";
   $query_run=mysqli_query($con,$query);
  
   while($row = mysqli_fetch_array( $query_run)){
       $issued_book_count=$row['issued_book_count'];
  }
  return($issued_book_count);
}
?>