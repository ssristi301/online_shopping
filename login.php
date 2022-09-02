<?php

?>
<!DOCTYPE html>   
<html>   
<head> 
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/bootstrap.bundle.js" rel="stylesheet"></script> 
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: grey;  
}  
button {   
       background-color:blue;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 			   
buttun niche
			   
			   form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid black;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
</style>   
</head>    
<body>    
    <center> <h1 class="mt-5" ><u> Login Form</u> </h1> </center>     
        <div class="container">  
          <div class="row">		
		  <div class="col-sm-3">
		  </div>
		  <div class="col-sm-6 mt-5"style="border: 3px solid #f1f1f1; background-color:red;" >
             <form action="log_code.php" method="post">
			<label>Email Address: </label>   
            <input type="text" placeholder="Enter Email Address" name="email" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <button type="submit">Login</button>   
            <input type="checkbox" checked="checked"> Remember me   
            <br/>   
			<a href="resister.php">Not Yet Register</a>
            <a href="resister.php " class="float-end">Forget Password</a> 
			</div>
			 <div class="col-sm-3">
		  </div>
			</div>
		</div>		
       
		
    </form>     
</body>     
</html>  