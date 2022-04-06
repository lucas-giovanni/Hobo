<?php
if (isset($_POST["name"])) {
  require "2-core.php";
  require "3-lib-member.php";
  if ($MEM->add($_POST["name"], $_POST["email"], $_POST["password"])) {
    exit();
  }
} ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/style.css" >
   <title>Register</title>
 </head>
 <body class="image-background">
   <?php
   if (isset($MEM)) { echo "<div class='error'>".$MEM->error."</div>"; }
   ?>
   <!-- <div class="black-block">
     <h1 class="green-title">Register</h1>
     <div class="steps ">
       <p class="green-text">Step 1 of 3 </p>
     </div>
     <div class="">
       <p>Create a password to start your membership!</p>
       <p>Just a few more steps and you're finished!
         We hate paperwork, too.</p>
     </div>
     <div class="form-invoer">
       <p>E-mail Or Phone Number</p>
       <input class="form-input" type="text" name="Username" placeholder="E-mail Or Phone Number">
         <p>Choose your Password</p>
       <input class="form-input" type="text" name="Password" placeholder="Password">
     </div>
     <div class=""><br>
       <div class="form-knop">
         <a href="registers2.php">Start your Register!</a>
       </div>
       <form class="inlog-privacy" action="/action_page.php">
         <input type="checkbox" id="privacy1" name="privacy" value="privacy">
         <label for="Privacy"> <a href="#">privacy</a> </label><br>
     </form><br>
     </div>

   </div> -->

   <form method="post" class="form">
     <input type="text" name="name" placeholder="Name" required/>
     <input type="email" name="email" placeholder="Email" required/>
     <input type="password" name="password" placeholder="Password" required/>
     <input type="submit" value="Register"/>
   </form>

 </body>
</html>
