<?php
include("admin/connection.php");
$query="select * from tbl_product";
$res=mysqli_query($con,$query);
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

<!--outline start-->
<div class="container-fluid">
<!--headline start-->
<div class="row bg-warning py-2">
<div class="col-sm-3">Call Us: +916392058830
</div>
<div class="col-sm-3">Mail Us: ssristi301@gmail.com</div>
<div class="col-sm-6">ggy</div>
</div>
<!--headine end-->
<!--nevbar start-->
<div class="row">
<div class="col-sm-2">
<img src="assets/images/1.png" style="height:100%;width:100%;"/>
</div>
<div class="col-sm-6 mt-3 ">
<nav class="navbar bg-light">
  <form class="container-fluid">
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>
  </form>
</nav>

</div>
<div class="col-sm-4 mt-4">
<i class="fa fa-map-marker ms-3" aria-hidden="true"></i>
<i class="fa fa-facebook ms-3" aria-hidden="true"></i>
<i class="fa fa-twitter ms-3" aria-hidden="true"></i>
<i class="fa fa-whatsapp ms-3" aria-hidden="true"></i>
<i class="fa fa-heart ms-3" aria-hidden="true"></i>
<i class="fa fa-user ms-3" aria-hidden="true"></i>
<i class="fa fa-cart-plus ms-3" aria-hidden="true"></i>cart

</div>
</div>
  <!--navbar end-->
  <div class="container-fluid">
  <div class="row mt-3 ps-5">
<?php
while($row=mysqli_fetch_array($res))
{
?>
     
   <div class="col-sm-3">
   <div class="card" style="width: 18rem;">
  <img src="admin/product/<?php echo $row['file_name'];?>" class="card-img-top my-card" alt="...">
  <div class="card-body">
  
    <h5 class="card-title"><?php echo $row['pro_name'];?></h5>
    <h6 class="card-title">Rs.<?php echo $row['s_price'];?>/-</h6>
	
    <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
    <div>
	<a href="#" class="btn btn-warning mt-2">Add TO Cart</a>
	<a href="#" class="btn btn-warning float-end mt-2">Buy Now</a>
	</div>
  </div>
</div>
</div>
  <?php
}
?>
</div>
</div>
 <!--product end-->
<!--footer start-->
  <div class="row bg-danger footer">
  <div class="col-sm-2">
  <h5>ADDRESS</h5>
  Name:Shristi Singh
  <br/>
  Vinegar and Jaggery Store
  <br/>
  Private Limited, Building Patna,
  Bagonia & Clove Embassy Tech Village, Outer Ring Road,
  Devarabeesanahalli Village, Bengaluru, 560103, Karnataka, India
  <br/>
  CIN:U51109KA2012PTC066107
  Contacts:6392058830
  </div>
  <div class="col-sm-2">
  
  </div>
  <div class="col-sm-2">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.619287858982!2d82.97511851481633!3d25.28338938385618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e332527df2039%3A0x1da4cdf3649317e4!2sGovernment%20Girls%20Polytechnic!5e0!3m2!1sen!2sin!4v1661355990815!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>
<!--footer end-->
 </div>
 </div>
 
 </div>

 <!--outline end-->
  </body>
</html>