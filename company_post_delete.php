<?php $mysqli= new mysqli('localhost','root','','admin') or die(mysqli_error($mysqli));

if (isset($_GET['delete'])){
  $id =$_GET['delete'];
$mysqli->query("DELETE  FROM post WHERE pid='$id' ") or die($mysqli_error());
  header("location:adminprofile.php");
}
 ?>
