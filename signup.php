<!DOCTYPE html>
<html lang='en'>
  <title> Sign up </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>  
<body>
  <?php
    session_start();
    echo '<p style="color:red">' . $_SESSION['message'] . '</p> '; 
  ?>
    <form name='signup' action='validate_new_user.php' method='post'>
    Name: <br><input type='text' maxlength='20' name='name' auofocus required><br>
    Surname: <br><input type='text' maxlength='20' name='surname' required><br>
    E-mail: <br><input type='email' name='email' required><br>
    Password: <br><input type='password' name='pass' maxlength='16' required><br>
    Repeat Password:<br><input type='password' maxlength='16' name='pass2' required>
    <br><br>
    <input type='submit' value='Sign up'> or 
    <input type='button' value='Login'  
    onclick = 'window.open("login.html", "_self")'>
  </form>
  
  
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>  
</body>
</html>
