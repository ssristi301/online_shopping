<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <form action="r_code.php" method="post">
	<table>
	<h1>Sign Up</h1>
	<tr>
	<th><label for="exampleFormControlInput1" class="form-label">User ID</label></th>
  <td><input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="user_id"></td>
	</tr>
		<tr>
	<th><label for="exampleFormControlInput1" class="form-label">Name</label></th>
  <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="name"></td>
	</tr>
	
	<tr>
	<th><label for="exampleFormControlInput1" class="form-label">Email</label></th>
  <td><input type="eamil" class="form-control" id="exampleFormControlInput1" placeholder="" name="email"></td>
	</tr>
<tr>
	<th><label for="exampleFormControlInput1" class="form-label">Mobile</label></th>
  <td><input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="mobile"></td>
	</tr>
	<tr>
	<th><label for="exampleFormControlInput1" class="form-label">Password</label></th>
  <td><input type="password" class="form-control" id="exampleFormControlInput1" placeholder="" name="password"></td>
	</tr>
	<tr>
	<th><label for="exampleFormControlInput1" class="form-label">City</label></th>
  <td><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="city"></td>
	</tr>
	<tr>
  <th><label for="exampleFormControlTextarea1" class="form-label">Address</label></th>
  <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea></td>
</tr> 
<tr>
 <th><label for="exampleFormControlInput1" class="form-label">Date</label></th>
  <td><input type="date" class="form-control" id="exampleFormControlInput1" name="date"></td>
</tr>
<tr>
<td><input type="submit"</td>
</tr>
	</table>
	</form>
<a href="login.php">Login here</a>
  </body>
</html>