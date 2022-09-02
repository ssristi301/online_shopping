<?php
include("admin/connection.php");
$query="select * from tbl_category";
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
<div class="row bg-warning py-2 sticky-top">
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

</div>
  <!--navbar end-->
  <div class="row "> 
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid bg-warning" align="center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="resister.php">Register</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="cart.php">cart</a>
        </li>
		        <li class="nav-item">
          <a class="nav-link" href="products.php">
            Products
          </a>

        </li>
		 <li class="nav-item">
		 <?php
			session_start();
			if(@$_SESSION['user']=="")
			{
				?>
				
	     <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
			 <li><a class="dropdown-item" href="profile.php">Profile</a></li>
          </ul>
        </li>
				
			<?php
			}
			else
			{
				?>
				
				<a class="nav-link" href="logout.php">Logout</a>
				
				<?php
			}
		 
		 
		 ?>
          
        </li>


      </ul>
    </div>
  </div>
</nav>
</div>
<!--notification start-->
<?php
include("connection.php");
$query="select * from tbl_notification order by sr_no desc limit 1";
$notice=mysqli_query($con,$query);
$notification=mysqli_fetch_array($notice);
?>
<div class="row">
  <div class="col-sm-12">
  <marquee><span class="text-primary"><?php echo $notification['notification'];?></span></marquee>
  </div>
  </div>
  <!--notification end-->

  <!--slider start-->
  <div class="row">
  <div class="container-fluid p-0">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/banners/1.png" class="d-block w-100 slider" style="height:700px;"alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/banners/3.png" class="d-block w-100 slider" style="height:700px;" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/images/banners/4.png" class="d-block w-100 slider" style="height:700px;" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
 </div>
  <!--slider end-->
  
  <!--section start-->
  <div class="row mt-3">
  <div class="col-sm-3 text-center">
  <div class="section shadow-lg">
  <img src="assets/images/gal6.jpg"/>
  </div>
  <button type="button" class="btn btn-warning mt-2">Warning</button>
  </div>
  <div class="col-sm-3 text-center">
  <div class="section shadow-lg">
  <img src="assets/images/img11.jpg"/>
  </div>
  <button type="button" class="btn btn-warning mt-2">Warning</button>
</div>
  <div class="col-sm-3 text-center">
  <div class="section shadow-lg">
  <img src="assets/images/section/gal7.jpg"/>
  </div>
<button type="button" class="btn btn-warning mt-2">Warning</button>
  </div>
  <div class="col-sm-3 text-center">
  <div class="section shadow-lg">
  <img src="assets/images/img7.jpg"/>
  </div>
<button type="button" class="btn btn-warning mt-2">Warning</button>
  </div>

  </div>
  </div>
    <!--section end-->

  <!--text start-->
    <div class="row my-3 pe-4">

  <div class="col-sm-3 content-left ps-5"><img src="assets/images/img11.jpg" class="w-100" style="height:300px;"/></div>
  <div class="col-sm-9"><h1 class="mt-2 ps-4">Why use vinegar in pickles</h1>
  <p class="mt-2 ps-4 pe-4">When you preserve vegetables with vinegar you end up with a food that can be preserved for long periods of time using simple ingredients.</p> 
  <p class="mt-2 ps-4 pe-4">The science of using vinegar for food preservation is simple. The acetic acid contained in the vinegar increases the acidity of the vegetables, killing off any microorganisms and effectively preserving the veggies by preventing spoilage.</p>

<p class="mt-2 ps-4 pe-4">There are limitations to vinegar pickling, however. The vinegar matters. While most people use distilled white vinegar because it won’t discolor the veggies, other types of vinegar can be used such as apple cider vinegar, which has a pronounced flavor.</p>

<p class="mt-2 ps-4 pe-4">What is terribly important is the acetic content? The vinegar must have a content of five percent acetic acid and should never be diluted. The acetic acid is what is killing off any bacteria and preventing botulism.</p></div>
  </div>
   
 <!--text end-->
 
 <!--secondslider start-->
 <div class="row">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/banners/6.png" class="d-block w-100" style="height:700px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/banners/5.png" class="d-block w-100" style="height:700px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/banners/2.png" class="d-block w-100" style="height:700px;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 </div>
  <!--sceendslider end-->
 <!--textsnd start-->
 <div class="row mt-3 ps-3">
 <div class="col-sm-9 pe-3">
 <h1 align="center">About Us Vinegar</h1>
 <p>vinegar, sour liquid that is made by the fermentation of any of numerous dilute alcoholic liquids into a liquid containing acetic acid. Vinegar may be produced from a variety of materials: apples or grapes (wine or cider vinegar); malted barley or oats (malt vinegar); and industrial alcohol (distilled white vinegar). There are also vinegars made from beer, sugars, rice, and other substances. As a commercial product, however, vinegar was probably first made from wine (French vin, “wine”; aigre, “sour”).

</p>
<p>Vinegar can be made from any liquid that is capable of being converted into alcohol in a two-step process. The fruit juice or other liquid contains sugar, which is converted into alcohol and carbon dioxide gas by the actions of yeast enzymes. The alcohol thus formed combines with atmospheric oxygen by the action of Acetobacter bacteria, forming acetic acid and water. Organic acids and esters derived from the fruit or other source material are also present and are responsible for the flavour and aroma variations of vinegar. Table vinegar contains approximately 4 percent acetic acid.

</p>
 </div>
 <div class="col-sm-3 pe-5"><img src="assets/images/img4.jpg" class="w-100" style="height:300px;"/></div>

 </div>
 <!--textsnd end-->
 

 </div>
 <div class="container-fluid">
 <div class="row">
 <?php
 while($row=mysqli_fetch_array($res))
 {
 ?>
 
   <div class="row mt-3 ps-5">
   <h1><?php echo $row['name'];?></h1>
   </div>
   <div class="row mt-3 ps-5">
   
   <?php 
   $cat_id=$row['cat_id'];
   $query2="select * from tbl_product where cat_id='$cat_id'";
   $res2=mysqli_query($con,$query2);
   while($row2=mysqli_fetch_array($res2))
   {
   ?>
<div class="col-sm-3">
<div class="card" style="width:18rem;">
  <img src="admin/product/<?php echo $row2['file_name'];?>" class="card-img-top my-card" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row2['pro_name'];?></h5>
    <h5 class="card-title">Rs.<?php echo $row2['s_price'];?>/-</h5>

    <small class="card-text d-block">Some quick example text to build on the card title and make up the bulk of the card's content.</small>
	<div>
    <a href="cart_code.php?pro_id=<?php echo $row2['pro_id'] ?>&cate_id=<?php echo $row2['cat_id'];?>" class="btn btn-warning mt-2">Add TO Cart</a>
	<a href="single.php?pro_id=<?php echo $row2['pro_id'] ?>" class="btn btn-warning float-end mt-2">Buy Now</a>
	</div>
  </div>
  </div>
 </div>

  <?php
 }
 ?>


 </div>
  <?php
 }
 ?>
  <!--section snd end-->
<!--footer start-->
  <div class="row bg-dark text-light footer mt-3">
  <div class="col-sm-2">
  <h4>ADDRESS</h4>
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
  <h4>ABOUT</h4>
  <h6 class="mt-3">Contact Us</h6>
 
  <h6 class="mt-3">About Us</h6>
  <h6 class="mt-3">Press</h6>
  <h6 class="mt-3">Vinegar Store</h6>
  <h6 class="mt-3">Vinegar Wholesale</h6>
  </div>
  <div class="col-sm-2">
  <h4>POLICY</h4>
  <h6 class="mt-3">Return</h6>
  <h6 class="mt-3">Term Of Use</h6>
  <h6 class="mt-3">Security</h6>
  <h6 class="mt-3">Privacy</h6>
  </div>

  <div class="col-sm-2">
    <h4>HELP</h4>

    <h6 class="mt-3">Payments</h6>   
	<h6 class="mt-3">Shipping</h6>
	    <h6 class="mt-3">Cancellation</h6>
		    <h6 class="mt-3">Report Infringement</h6>

  </div>
    <div class="col-sm-1">
    <h4>SOCIAL</h4>

    <h6 class="mt-3">facebook</h6>   
	<h6 class="mt-3">Linkdin</h6>
	    <h6 class="mt-3">Instagram</h6>
		    <h6 class="mt-3">Twitter</h6>
					    <h6 class="mt-3">You Tube</h6>


  </div>
  <div class="col-sm-3">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.619287858982!2d82.97511851481633!3d25.28338938385618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e332527df2039%3A0x1da4cdf3649317e4!2sGovernment%20Girls%20Polytechnic!5e0!3m2!1sen!2sin!4v1661355990815!5m2!1sen!2sin" width="350" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>
<!--footer end-->
 </div>
 </div>
 
 </div>
 <!--outline end-->
  </body>
</html>