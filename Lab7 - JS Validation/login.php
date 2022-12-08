<html lang="en">
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="main-content">
      <form
        id="login-form"
        name="myForm"
        action="login.php"
        method="post"
        onsubmit="return validateForm()"
      >

        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" />
          <p class="msgUser"></p>

          <label for="pass"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" />
          <p class="msgPass"></p>

          <button type="submit">Login</button>
          <label> <input type="checkbox" name="remember" /> Remember me </label>

        </div>

        <div class="container" style="background-color: #f1f1f1">
          <button type="reset" class="cancelbtn">Cancel</button>
          <span class="password"><a href="#">Forgot password?</a></span>
        </div>
      </form>
    </div>

    <script>

      function validateForm() {
        let x = document.forms["myForm"]["username"].value;
        let y = document.forms["myForm"]["password"].value;

        if (x === "" && y === "") {
          document.getElementsByClassName("msgUser")[0].innerHTML =
            "Username is required";
          document.getElementsByClassName("msgPass")[0].innerHTML =
            "Password is required";
          return false;
        } else if (x === "") {
          document.getElementsByClassName("msgUser")[0].innerHTML =
            "Username is required";
          return false;
        } else if (y === "") {
          document.getElementsByClassName("msgPass")[0].innerHTML =
            "Password is required";
          return false;
        }

        /* PHP validation from external php file */
        

        return (alert("Successfully logged in!"));

      }

    </script>
    
  </body>
</html>
