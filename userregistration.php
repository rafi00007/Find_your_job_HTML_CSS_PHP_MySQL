<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="user_regs.css">
  </head>
  <body>
    <p class="log">

       <a href="homepage.php">
         <button type="button" class="btn1" name="Data">HOME PAGE</button>
      </a>



   </p>

       <div class="title"><h1>Registration For User</h1></div>
       <div class="container">
         <div class="right"></div>
         <div class="left">
           <div class="formbox">
             <form action="user_store_reg.php" method="POST">
               <div >
               <label> Name </label>
               <input type="text" name="name" >
             </div>
             <div >
             <label> phone </label>
             <input type="text" name="phone" >
           </div>
               <div>
                <label> Email </label>
               <input type="text" name="email" >
             </div>
             <div >
              <label> password</label>
             <input type="number" name="pass">
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
               <a href="user_login.php">Click Here For Only User Login </a>
             </form>

  </body>
</html>
