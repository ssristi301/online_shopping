<?php

$category=$_POST['category'];
//echo $category;
include("connection.php");
 $query="insert into  tbl_category(name,date) values('$category',now())";
 //echo $query;
mysqli_query($con,$query);
header("location:category.php");
?>