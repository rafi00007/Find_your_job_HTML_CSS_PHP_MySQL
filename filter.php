<?php
session_start();
if (isset($_SESSION["email"]))
{
}
else{
  header("location:user_login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="filter_css.css">

      <title> company_post</title>
</head>
<body>
     <p class="log">
        <a href="user_login.php" >
           <button type="button"class="btn1" name="Data">Back</button>
        </a>
        <a href="homepage.php">
          <button type="button" class="btn1" name="Data">homepage</button>
       </a>
     </a>
     <a href="allnews_admin.php">
        <button type="button" class="btn1" name="Data">ALLnews</button>
     </a>
       <a href="logout_admin.php">
          <button type="button" class="btn1" name="Data">Logout</button>
       </a>

    </p>
      <div class="title"><h1>COMPANY POST<h1> </div>


              <div class="formbox">


                      <form action="" method="POST">
                              <label>COMPANY Name : </lable>
                               <input type="text" name="cname" />

                          <label>Area : </lable>
                           <select name="area">
                             <option>Select</option>
                           <option value ="dhaka" >Dhaka</option>
                           <option value ="rangpur" > Rangpur</option>
                           <option value ="chattagram" >Chattagram</option>
                           <option value ="bogra" > Bogura</option>
                           <option value ="khulna" >Khulna</option>
                           <option value ="rajshahi" > Rajshahi</option>
                           <option value ="barishal" >Barisal</option>
                           <option value ="comilla" > Comillar</option>

                           </select>
                           <label>Post : </lable>
                                      <select name="post">
                                     <option>Select</option>
                                      <option value ="CEO" > CEO </option>
                                      <option value ="Engineer" > Engineer </option>
                                      <option value ="CTO" > CTO</option>
                                      <option value ="supervisor" > supervisor </option>
                                      <option value ="teacher" > teacher </option>
                                      <option value ="sales manager" > sales manager </option>



                                    </select>



                                  <lable> Qualification: </lable>
                                <select name="qua">
                                <option>Select</option>
                                <option value ="Bsc" > Bsc </option>
                                 <option value ="BBA" > BBA </option>
                                 <option value ="Bsc" > Msc </option>
                                  <option value ="BBA" >MBA </option>
                                  <option value ="Bsc" > BA </option>
                                   <option value ="BBA" > MA</option>



                              </select>
                           <lable> Salary </lable>
                               <input type="number" name="salary" value=""/>
                             <lable> Last date </lable>
                                   <input type="date" name="ldate" value="ldate"/>
                               <br>
                               <input type="submit" name="submit" value="submit">

                    </form>
             </div>
             </div>
           <div >
             <table border="1">
               <thead>
                 <tr>
                    <th>ID</th>
                   <th>company Name</th>
                   <th>Area</th>
                   <th>Job Position</th>
                   <th>Requirement</th>
                   <th>Experience</th>
                   <th>salary</th>
                   <th>vacancy</th>
                   <th>Email</th>
                    <th>last-Date</th>
                    <th>Action</th>
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
                 if (isset($_POST['submit'])){
                   $cname =$_POST['cname'];
                   $area =$_POST['area'];
                   $post =$_POST['post'];
                   $qua=$_POST['qua'];
                   $salary =$_POST['salary'];
                   $ldate=$_POST['ldate'];

                   if($cname != "" || $area != "" || $post != "" || $qua != "" || $salary != "" || $ldate != "")
                   {
                    $query="SELECT * FROM post WHERE company_name='$cname' ||area='$area' || job_position='$post' || requirement='$qua'
                  || selary='$salary' ||  last_date='$ldate'ORDER by pid DESC";

                     $data= mysqli_query($conn,$query) or die('error');
                     if(mysqli_num_rows($data)>0){
                       while($row=mysqli_fetch_assoc($data))
                       {
                          $id=  $row['pid'];
                        $cname=  $row['company_name'];
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
                            <td> <?php echo $row['pid'];?></td>
                         <td> <?php echo $row['company_name'];?></td>
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
</td>
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
