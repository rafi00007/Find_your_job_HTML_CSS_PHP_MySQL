<?php
session_start();
if (isset($_SESSION["email"]))
{
  ?>
  <h3>login success,welcome -<?php echo  $_SESSION["email"]?></h3>;
<?php
}
else{
	header("location:admin_login.php");
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<title> Login page</title>
<link rel="stylesheet" type="text/css" href="adminprofile_css.css">
<body>
    <p class="post">
    <a href="com_post_data.php" >
  <button type="button"class="btn1" name="Data">post new jobs</button>
</a>
<a href="homepage.php" >
<button type="button"class="btn1" name="Data">Home</button>
</a>
</p>
<div class="formbox">
      <form action ="" method="POST">
	   <p> User name</p>
		 <input type ="text"  name ="cname" placeholder="company_name"/>
      <input required type ="password"  name ="pass" placeholder="***"/>
		<input type="submit"  name="login" value="submit">
	</form>
</div>



  <table border="1">
    <thead>
      <tr>
             <th>id</th>
        <th>company Name</th>

        <th>Area</th>
        <th>Job Position</th>
        <th>Requirement</th>
        <th>Experience</th>
        <th>salary</th>
        <th>vacancy</th>
        <th>Last Date</th>
        <th>EMAIL</th>
          <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $server="127.0.0.1";
      $user="root";
      $pass="";
      $dbname="admin";
      $conn =mysqli_connect($server,$user,$pass,$dbname);
      if(!$conn){
        die("Connection Failed".mysqli_connect_error());
      }
      if (isset($_POST['login'])){
        $cname =$_POST['cname'];
          $pass =$_POST['pass'];
        if($cname != "" )
        {
          $query="SELECT * FROM post WHERE company_name ='$cname' AND password=$pass ORDER BY pid desc ";
          $data= mysqli_query($conn,$query) or die('error');
          if(mysqli_num_rows($data)>0){
            while($row=mysqli_fetch_assoc($data))
            {
                $cname=  $row['pid'];
              $cname=  $row['company_name'];
              $area=  $row['area'];
              $post=  $row['job_position'];
              $qua=  $row['requirement'];
              $exp=  $row['experience'];
              $salary=  $row['selary'];
              $vac=  $row['vecancy'];
              $ldate=  $row['last_date'];
                $email=  $row['email'];
              ?>
              <tr>
                    <td> <?php echo $row['pid'];?></td>
              <td> <?php echo $row['company_name'];?></td>
              <td> <?php echo $row['area'];?></td>
              <td> <?php echo $row['job_position'];?></td>
              <td> <?php echo $row['requirement'];?></td>
              <td> <?php echo $row['experience'];?></td>
              <td> <?php echo $row['selary'];?></td>
              <td> <?php echo $row['vecancy'];?></td>
              <td> <?php echo $row['last_date'];?></td>
              <td> <?php echo $row['email'];?></td>
              <td><a href="company_post_delete.php?delete= <?php echo $row['pid'];?>">
               <input type="submit" name="submit" value="delete"></a></td>
            </tr>
              <?php
}

}
else{
?>
<tr>
<td> record not found</tr>
</tr>

<?php

}
}


}


?>
</tbody>
  </table>



</body>
</html>
