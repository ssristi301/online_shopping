<?php
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

</div>
  <!--navbar end-->
  <div class="row"> 
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
          <a class="nav-link" href="aboutus.php">about us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="resister.php">Register</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="cart.php">cart</a>
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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Vinegar</a></li>
            <li><a class="dropdown-item" href="#">jaggery</a></li>
            <li><a class="dropdown-item" href="#">pickle</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="row">
<div class="col-sm-12 bg-secondary">
<h1 align="center">About Gavai Swad Agro Products (P) Limited</h1>
<br/>
<p class="ps-3">The Gavai Swad Agro Products P Limited (Gavai Swad) is a company founded in 2020
during the lockdown period when the food services were not available in offline mode for
window shopping.</p>

<p class="ps-3">The vision behind starting “Gavai Swad” is to provide the real taste of India and the real
products made out of desi raw material. Nowadays, getting Organic fruits and vegetables is
next to impossible since adulteration has become a common practice. Unlike conventional
ones which are coated with waxes and sprayed with chemicals, basically mummifying them.</p>
<p class="ps-3">We, at Gavai Swad treat nature as it should be and provide a wide variety of the freshest
possible products free from harmful pesticides and chemicals, that disrupt our physical health
and mental wellbeing.</p>
<p class="ps-3">We offer a range of products like: Sugarcane sirka, pickles, murabba, jaggery products to our
customers freshly made without using any chemicals &amp; pesticides. Since now all of us are
getting more internet &amp; technology savvy and we all want the services at our doorstep and
therefore gavaiswad.com portal came into existence.</p>
<p class="ps-3">The products of Gavai Swad are available on Amazon, Flipkart, Swiggy &amp; other e-commerce
based food portals.</p>
<div class="row">
<h2 align="center"><u>Our Product Photo </u></h2>
<center><img src="assets/images/organic-about.jpg" style="height:250px; width:400px;"/></center>
</div>
</div>
</div>


<div class="row bg-dark footer mt-2 text-light">
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