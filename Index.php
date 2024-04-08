<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Assets\CSS\Login-SignStyle.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="box form-box">
      <header>Login</header>
      <form action="" method="post">
        <div class="field input">
          <label for="username">Username</label>
          <input type="text" name="username" id="" required>
        </div>

        <div class="field input">
          <label for="password">Password</label>
          <input type="password" name="password" id="" required>
        </div>

        <div class="field">
          <input type="submit" class="btn" name="submit" value="Login">
        </div>
        <div class="links">
          Don't have an account? <a href="Pages/Register.php">Sign up</a>
        </div>        
      </form>
    </div>
  </div>
</body>
</html>