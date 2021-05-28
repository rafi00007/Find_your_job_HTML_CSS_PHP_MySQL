
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
  <link rel="stylesheet" type="text/css" href="allnews_admin_css.css">
</head>
<body>
  <p class="logout_admin">
    <a href="homepage.php" >
    <button type="button"class="btn1" name="Data">homepage</button>
    </a>
  <a href="filter.php" >
  <button type="button"class="btn1" name="Data">Back</button>
  </a>
  <a href="logout_admin.php">
    <button type="button" class="btn1" name="Data">Logout</button>
  </a>
</p>
  <div >
    <table border="1">
      <thead>
        <tr>
          <th>company Name</th>
          <th>Address</th>
          <th>Area</th>
          <th>Job Position</th>
          <th>Requirement</th>
          <th>Experience</th>
          <th>salary</th>
          <th>vacancy</th>
          <th>Email</th>
          <th>Last Date</th>
            <th>Action</th>
        </tr>
      </thead>
<?php
$conn= mysqli_connect("localhost","root","","admin");
if ($conn-> connect_error){
  die("Connection failed:".$conn-> connect_error);
}
$sql ="SELECT * FROM post ORDER by pid DESC";
$result=$conn-> query($sql);
    while ($row = $result ->fetch_assoc()):
?>
<tr>
  <td> <?php echo $row['company_name'];?></td>
  <td> <?php echo $row['address'];?></td>
  <td> <?php echo $row['area'];?></td>
  <td> <?php echo $row['job_position'];?></td>
  <td> <?php echo $row['requirement'];?></td>
  <td> <?php echo $row['experience'];?></td>
  <td> <?php echo $row['selary'];?></td>
  <td> <?php echo $row['vecancy'];?></td>
    <td> <?php echo $row['email'];?></td>
  <td> <?php echo $row['last_date'];?></td>
  <td><a href="new.php?delete= <?php echo $row['pid'];?>">
    <input type="submit" name="submit" value="view"></a>
</tr>

<?php endwhile;?>
</table>
</div>
</body>
</html>
