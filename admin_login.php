<?php
session_start();
$host="localhost";
$username="root";
$password="";
$database= "admin";
$message="";

try{
$connect=new PDO("mysql:host=$host; dbname=$database",$username,$password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_POST["login"])){
    if(empty($_POST["email"])||empty($_POST["password"])){
      $message='<label> All field are empty </label>';

    }
    else{
      $query="SELECT * FROM reg WHERE email=:email AND password=:password";
      $statement= $connect ->prepare($query);
      $statement->execute(
        array(
          'email'=>$_POST["email"],
          'password'=>$_POST["password"]
        )
      );
      $count =$statement->rowCount();
      if($count>0)
      {
        $_SESSION["email"]=$_POST["email"];
        header("location:adminprofile.php");
      }
      else{
            $message='<label> wrong data</label>';
      }
    }
  }
}
catch(PDOException $error){

$message=$error->getMessage();

}






 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title> Login page</title>
<link rel="stylesheet" type="text/css" href="admin_login.css">
</head>
<body>
  <p class="log">

     <a href="homepage.php">
       <button type="button" class="btn1" name="Data">HOME PAGE</button>
    </a>



 </p>

   <div class="title"><h1>Admin Log in<h1> </div>
     <div class="container">
        <div class="left"></div>
        <div class="right">
          <div class="formbox">
      <form action ="" method="post">
	   <p> User name</p>
		 <input type ="text"  name ="email" placeholder="email@.com"/>
		  <p> password</p>
		 <input type ="password"  name ="password" placeholder="*********"/>
		<input type="submit"  name="login" value="Login">
	</form>
</div>
</div>
</div>
</div>
</body>
</html>
