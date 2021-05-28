<?php
session_start();
if (isset($_SESSION["email"]))
{
}
else{
	header("location:admin_login.php");
}

?>

	<!DOCTYPE html>
	<html>
	 <head>
		 <meta charset="utf-8">
	 <title> company_post</title>
	 <link rel="stylesheet" type="text/css" href="com_post_data.css">
	</head>
	<body>
		<p class="log">
	  <a href="adminprofile.php" >
	  <button type="button"class="btn1" name="Data">Back</button>
	  </a>
		<a href="homepage.php">
			<button type="button" class="btn1" name="Data">homepage</button>
		</a>
	  <a href="logout_admin.php">
	    <button type="button" class="btn1" name="Data">Logout</button>
	  </a>

	</p>
		<div class="title"><h1>COMPANY POST<h1> </div>
	 	 <div class="container">

	 				<div class="formbox">


		<form action="company_post.php" method="POST">
	 	 <p >Company Name </p>
	 	 <input type="text" name="cname" value="" />
		 <p> password</p>
  	 <input required type ="password"  name ="password" placeholder="*********"/>
	  <p> Address </p>
	 	 <input type="text" name="address" value=""/>
	  <p> Area </p>
	 	 <input type="text" name="area" value=""/>
	  <p> Job Position </p>
		<input type="text" name="Job" value=""/>
	 <p> REQUIREMENT </p>
	 <input type="text" name="req" value=""/>
	<p> Experience </p>
	<input type="number" name="exp" value=""/>
 <p> Salary </p>
 <input type="number" name="salary" value=""/>
<p>vecancy</p>
<input type="number" name="vac" value=""/>
<p>Email</p>
<input type="email" name="email" value=""/>
<p> last Date</p>
<input type="date" name="ldate" value=""/>

	 	 <input type="submit" name="submit" value="submit">

 </form>
	  </div>
 </div>
	 </body>
	 </html>
