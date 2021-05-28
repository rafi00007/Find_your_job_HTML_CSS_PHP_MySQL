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
         <link rel="stylesheet" type="text/css" href="new_css.css">
       <title> company_post</title>
 </head>
 <body>
      <p class="log">
         <a href="filter.php" >
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


              </div>
              </div>
            <div >
              <table border="1">
                <thead>

                <tbody>
                  <?php
                   $mysqli= new mysqli('localhost','root','','admin') or die(mysqli_error($mysqli));

                  if (isset($_GET['delete'])){
                    $id =$_GET['delete'];


                    $query="SELECT *  FROM post WHERE pid='$id' ";

                       $data= mysqli_query($mysqli,$query) or die('error');
                      if(mysqli_num_rows($data)>0){
                        while($row=mysqli_fetch_assoc($data))
                        {
                           $id=  $row['pid'];
                         $cname=  $row['company_name'];
                            $address=  $row['address'];
                         $area=  $row['area'];
                         $post=  $row['job_position'];
                         $qua=  $row['requirement'];
                         $exp=  $row['experience'];
                         $salary=  $row['selary'];
                         $vac=  $row['vecancy'];
                          $email=  $row['email'];
                         $ldate=  $row['last_date'];
                          ?>
                          <tr>
                              <th>ID</th>
                             <td> <?php echo $row['pid'];?></td>
                           </tr>
                           <tr>
                           <th>company Name</th>
                           <td> <?php echo $row['company_name'];?></td>
                         </tr>
                         <tr>
                           <th>Area</th>
                           <td> <?php echo $row['address'];?></td>

                         </tr>
                         <tr>
                           <th>Area</th>
                           <td> <?php echo $row['area'];?></td>

                         </tr>
                         <tr>
                           <th>Job Position</th>
                           <td> <?php echo $row['job_position'];?></td>
                         </tr>
                         <tr>
                           <th>Requirement</th>
                             <td> <?php echo $row['requirement'];?></td>
                         </tr>
                         <tr>
                           <th>Experience</th>
                           <td> <?php echo $row['experience'];?></td>
                         </tr>
                         <tr>
                           <th>salary</th>
                           <td> <?php echo $row['selary'];?></td>
                         </tr>
                         <tr>
                           <th>vacancy</th>
                           <td> <?php echo $row['vecancy'];?></td>
                         </tr>
                         <tr>
                           <th>email</th>
                           <td> <?php echo $row['email'];?></td>
                         </tr>
                         <tr>
                           <th>Last Date</th>
                           <td> <?php echo $row['last_date'];?></td>

                         </tr>
                         <tr>
                           <th>EMAIL</th>
                           <td>   <a href="https://www.gmail.com" >Email </a></td>
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




                   ?>

              </tbody>
            </table>
       </body>
  </html>
