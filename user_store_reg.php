

<?php
  $name =$_POST['name'];
    $phone =$_POST['phone'];
  $email =$_POST['email'];
  $number =$_POST['pass'];
  $password =$_POST['cpass'];
  $conn =mysqli_connect('localhost','root','','admin');
  $sql="INSERT INTO user (full_name , phone,email ,password, confirm_pass) VALUE ('$name','$phone' ,'$email' ,'$number','$password')";
  if(mysqli_query($conn, $sql)){
    header("Location: user_login.php");
    echo 'insert sucess';
  }
  else {
    echo "not insert";
  }



?>
