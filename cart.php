<?php
session_start();
if($_SESSION['user']=="")
{
	header("location:login.php");
}
else
{
include("connection.php");
$user=$_SESSION['user'];
$query1="select * from tbl_user where email='$user'";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
$user_id=$row1['user_id'];
//echo $user_id;
$query2="select * from tbl_cart where user_id='$user_id'";
$res2=mysqli_query($con,$query2);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/bootstrap.css" rel="stylesheet"/>
	<link href="assets/css/style.css" rel="stylesheet"/>
    <script src="assets/js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <title>Bootstrap demo</title>
  </head>
  <body>
  <div class="container">
  <?php
  while($row2=mysqli_fetch_array($res2))
  {
	  $pro_id=$row2['pro_id'];
	  $query3="select * from tbl_product where pro_id='$pro_id'";
	  $res3=mysqli_query($con,$query3);
	  $row3=mysqli_fetch_array($res3);
  ?>
  <div class="row">
  <div class="col-sm-12">
	<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-2">
      <img src="admin/product/<?php echo $row3['file_name']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-10">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row3['pro_name'];?></h5>
        <p class="card-text"><?php echo $row3['description'];?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
  </div>
  </div>
  <?php
  }
  ?>
  </div>
</body>
</html>
<?php
}
?>