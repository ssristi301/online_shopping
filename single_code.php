<?php
$user=$_POST['user'];
//echo $user;
$pro=$_POST['pro'];
//echo $pro;
$cat=$_POST['cat'];
//echo $cat;
$unit=$_POST['unit'];
//echo $unit;
$amount=$_POST['amount'];
//echo $amount;
include('admin/connection.php');
$query=" insert into tbl_order(user_id,cate_id,pro_id,quantity,amount,order_date) values('$user','$cat','$pro','$unit','$amount',curdate())";
if(mysqli_query($con,$query))
{
	$query2="update tbl_product unit=unit-$unit where pro_id='$pro'";
	mysqli_query($con,$query2);
	header("location:index.php");
	
}
?>