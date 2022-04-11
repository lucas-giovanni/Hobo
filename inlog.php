 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>Login</title>
  </head>
  <body class="image-background">
    <br><br><br>
    <div class="black-block">
      <h1 class="green-title">Sign In</h1>
      <div class="form-invoer">
        <p>E-mail</p>
        <input class="form-input" type="text" name="Username" placeholder="Email">
        <br><br><br>
          <p>Password</p>
        <input class="form-input" type="text" name="Password" placeholder="Password">
      </div>
      <div class=""><br>
        <div class="form-knop">
          <a href="whoswatching.php">Sign In</a>
        </div>
        <br><br>
        	<span class="checkbox2">
               <label class="checkbox "><input type="checkbox" name="Terms" checked="" required><i> </i>I Accept Terms of <a class="green-text" href="privacy.php" target="_blank" >privacy</a> .</label>
           </span><br><br>

        <!-- <form class="inlog-privacy" action="/action_page.php">
          <input type="checkbox" id="privacy1" name="privacy" value="privacy">
          <label for="Privacy"> <a target="_blank" href="privacy.php">privacy</a> </label><br>
      </form><br> -->
      </div>
        <div class="inlog-Register">
        <p>No account yet? <a class="green-text" href="sign-up.php">Register</a> right here! </p>
      </div>
    </div>

<!-- <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>

     </form> -->
  </body>
</html>
