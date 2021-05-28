<?php
session_start();
if (isset($_SESSION["email"]))
{


}
else{
  header("location:admin_login.php");
}



 ?>


<?php
$mysqli= new mysqli('localhost','root','','admin') or die(mysqli_error($mysqli));
if (isset($_POST["submit"])){

  $cname =$_POST['cname'];
  $pass =$_POST['password'];
  $address =$_POST['address'];
  $area =$_POST['area'];
  $job =$_POST['Job'];
  $req=$_POST['req'];
  $exp =$_POST['exp'];
  $salary =$_POST['salary'];
  $vac =$_POST['vac'];
    $email =$_POST['email'];
  $ldate=$_POST['ldate'];
   $res =$mysqli->query("SELECT * FROM reg where password ='$pass' ");
    if(mysqli_num_rows($res)>0){

  $mysqli->query("INSERT INTO post(company_name , password,address , area ,job_position ,requirement,experience , selary ,vecancy ,email,last_date)
   VALUE ('$cname','$pass' ,'$address' ,'$area','$job','$req','$exp','$salary','$vac','$email','$ldate')")
  or die($mysqli ->error);
    $result =$mysqli->query("SELECT * FROM post where company_name ='$cname' order by pid DESC ")    or die($mysqli ->error);


?>
<html>
<head>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="company_datatable.css">
</head>
<body>


    <p class="logout_admin">

    <a href="adminprofile.php" >
    <button type="button"class="btn1" name="Data">back</button>
    </a>
    <a href="homepage.php">

<button type="button" class="btn1" name="Data">Home</button>
</a>
    <a href="logout_admin.php">

<button type="button" class="btn1" name="Data">Logout</button>
</a>
      </p>
<div >
  <table border="1">
    <thead>
      <tr>
        <th>id</th>
        <th>company Name</th>
          <th>password</th>
        <th>Address</th>
        <th>Area</th>
        <th>Job Position</th>
        <th>Requirement</th>
        <th>Experience</th>
        <th>salary</th>
        <th>vacancy</th>
        <th >Email</th>
        <th>Last Date</th>

      </tr>
    </thead>
<?php
    while ($row = $result ->fetch_assoc()):
?>
<tr>
  <td> <?php echo $row['pid'];?></td>
  <td> <?php echo $row['company_name'];?></td>
  <td> <?php echo $row['password'];?></td>
  <td> <?php echo $row['address'];?></td>
  <td> <?php echo $row['area'];?></td>
  <td> <?php echo $row['job_position'];?></td>
  <td> <?php echo $row['requirement'];?></td>
  <td> <?php echo $row['experience'];?></td>
  <td> <?php echo $row['selary'];?></td>
  <td> <?php echo $row['vecancy'];?></td>
  <td> <?php echo $row['email'];?></td>
  <td> <?php echo $row['last_date'];?></td>




</tr>
<?php endwhile;}
else{
  header("Location:com_post_data.php");
} }
?>
  </table>




</div>


</body>
</html>
