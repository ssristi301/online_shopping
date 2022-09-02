<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/bootstrap.bundle.js" rel="stylesheet"></script>
    <!-- font-icon & font-awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {

            background-color: #5f9ea0;
        }
    </style>
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
<div class="row bg-light">
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
  <div class="container-fluid  bg-warning" align="center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            Logout.php
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <div class="container-fluid">
        <!-- end navbar -->
        <div class="row">
            <div class="row">
                <div class="col-sm-3 ">
                    <div class="col-sm-12 text-center">
                        <span><img src="assets/images/banners/th1.jpg" style="width:150px; height:150px; border-radius:50%;" /></span>
                    </div>
                    <div class="list-group text-center my-2">
                        
                        <a href="profile.php" class="list-group-item list-group-item-action list-group-item-danger my-2">MY PROFILE</a>
                        <a href="login.php" class="list-group-item list-group-item-action list-group-item-primary y-2">LOGOUT</a>
                        <a href="#" class="list-group-item list-group-item-action list-group-item-secondary my-2"> MY ORDERS</a>
                        <a href="change_password.php" class="list-group-item list-group-item-action list-group-item-success my-2">CHANGE PASSWORD</a>
                        <a href="cart.php" class="list-group-item list-group-item-action list-group-item-danger my-2">MY CART</a>
                       
                    </div>
                </div>

                <div class="col-sm-9 ">
                    <div class="container-fulid">
                        <div class="row bg-dark text-light">
                            <div class="col-sm-10">
                                <h3 class="my-2" align="center">Welcome to Profile</h3>
                            </div>

                            
                        </div>
                        
                        
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
	<!--footer start-->
  <div class="row bg-danger footer mt-3">
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
</body>

</html>