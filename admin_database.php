

<?php
  $name =$_POST['name'];
  $email =$_POST['email'];
  $number =$_POST['pass'];
  $password =$_POST['cpass'];
  $conn =mysqli_connect('localhost','root','','admin');
  $sql="INSERT INTO reg (company_name , email ,password, confirm_pass) VALUE ('$name' ,'$email' ,'$number','$password')";
  if(mysqli_query($conn, $sql)){
    header("Location: admin_login.php");
    echo 'insert sucess';
  }
  else {
    echo "not insert";
  }



?>
