<?php
session_start();

if($_SESSION['user']=='')
{
	header("location:login.php");
}else
{
	$pro_id=$_REQUEST['pro_id'];
	//echo"$pro_id";
	include("admin/connection.php");
	$query="select * from tbl_product where pro_id='$pro_id'";
	$res=mysqli_query($con,$query);
	$row=mysqli_fetch_array($res);
	 
	 $user=$_SESSION['user'];
	 echo $user;
	 $query2="select * from tbl_user where email='$user'";
	 $res2=mysqli_query($con,$query2);
	 $row2=mysqli_fetch_array($res2);
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
    <title>Single product</title>
  </head>
  <body>
    <div class="container-fluid">
	   <div class="container">
	<div class="row">
	 
	<div class="col-sm-12">
	<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="admin/product/<?php echo $row['file_name'];?> " class="img-fluid rounded-start h-100 w-100" alt="...">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['pro_name'];?></h5>
		<h5 class="card-title">Rs.<?php echo $row['s_price'];?>/-</h5>
		<h5 class="card-title"><?php echo $row['description'];?></h5>
		<small class="text-muted">Shipping Address<?php echo $row2['address'];?></small>
		<br/>
		<br/>
		<input type="radio"/>Cash on delivery
		<form action="single_code.php" method="post">
	     <input type="hidden" name="user" value="<?php echo $row2 ['user_id'];?>"/>
	     <input type="hidden" name="pro" value="<?php echo $row['pro_id'];?>"/>
	     <input type="hidden" name="cat" value="<?php echo $row['cat_id'];?>"/>
		 <input type="hidden" name="unit" value="1"id=""/>
		<input type="hidden" name="amount" value="<?php echo $row ['s_price'];?>"/>
		<button type="submit" class="btn btn-danger float-end">Place Order</button>
		</form>
		

      </div>
    </div>
  </div>
</div>
</div>
	</div>
	</div>
	</div>
  </body>
</html>
<?php
}
?>