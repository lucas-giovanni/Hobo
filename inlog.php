 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <title>Login</title>
  </head>
  <body class="image-background">
<!--
    <div class="black-block">
      <h1 class="green-title">Sign In</h1>
      <div class="form-invoer">
        <p>E-mail Or Phone Number</p>
        <input class="form-input" type="text" name="Username" placeholder="Username">
          <p>Password</p>
        <input class="form-input" type="text" name="Password" placeholder="Password">
      </div>
      <div class=""><br>
        <div class="form-knop">
          <a href="whoswatching.php">Sign In</a>
        </div>
        <form class="inlog-privacy" action="/action_page.php">
          <input type="checkbox" id="privacy1" name="privacy" value="privacy">
          <label for="Privacy"> <a href="#">privacy</a> </label><br>
      </form><br>
      </div>
        <div class="inlog-Register.php">
        <p>No account yet? <a class="green-text" href="register.php">Register</a> </p>
      </div>
    </div> -->

      <div id = "frm">  
          <h1>Login</h1>
          <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
              <p>
                  <label> UserName: </label>
                  <input type = "text" id ="user" name  = "user" />
              </p>
              <p>
                  <label> Password: </label>
                  <input type = "password" id ="pass" name  = "pass" />
              </p>
              <p>
                  <input type =  "submit" id = "btn" value = "Login" />
              </p>
          </form>
      </div>
      // validation for empty field
      <script>
              function validation()
              {
                  var id=document.f1.user.value;
                  var ps=document.f1.pass.value;
                  if(id.length=="" && ps.length=="") {
                      alert("User Name and Password fields are empty");
                      return false;
                  }
                  else
                  {
                      if(id.length=="") {
                          alert("User Name is empty");
                          return false;
                      }
                      if (ps.length=="") {
                      alert("Password field is empty");
                      return false;
                      }
                  }
              }
          </script>


  </body>
</html>
