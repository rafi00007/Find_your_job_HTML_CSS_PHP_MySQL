<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="admin_reg.css">
  </head>
  <body>
    <p class="log">

       <a href="homepage.php">
         <button type="button" class="btn1" name="Data">HOME PAGE</button>
      </a>



   </p>

       <div class="title"><h1>Registration For admin</h1></div>
       <div class="container">
         <div class="right"></div>
         <div class="left">
           <div class="formbox">
             <form action="admin_database.php" method="POST">
               <div >
               <label> Name </label>
               <input type="text" name="name" >
             </div>

               <div>
                <label> Email </label>
               <input type="text" name="email" >
             </div>
             <div >
              <label> password</label>
             <input type="number" name="pass" >
           </div>
               <div >
                <label> confirm  Password </label>
               <input type="password" name="cpass" >
             </div>
             <div >
               <button type="submit" name="submit" onclick =" alert ("submited")">signup</button>
             </div>




               <br>
               <br>
               <a href="admin_login.php">Click Here For Only Admin  Login </a>
             </form>

  </body>
</html>
