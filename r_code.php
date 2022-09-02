<?php
$User_id=$_POST['user_id'];
//echo"$User_id";
$name=$_POST['name'];
//echo "name";
$email=$_POST['email'];
//echo"$email";
$mobile=$_POST['mobile'];
//echo"$mobile";
$password=$_POST['password'];
//echo"$password";
$city=$_POST['city'];
//echo"$city";
$address=$_POST['address'];
//echo"$address";
$date=$_POST['date'];
//echo"$date";
$con=mysqli_connect("localhost","root","","os");
$query="insert into tbl_user(user_id,name,email,mobile,password,city,address,dor) values('$User_id','$name','$email','$mobile','$password','$city','$address',curdate())";
//echo"$query";
mysqli_query($con,$query);
?>
