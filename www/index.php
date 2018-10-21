<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" charset="utf-8"/>
      <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script language="JavaScript" src="js/tamil.js" type="text/JavaScript"></script>
      <script type="text/javascript">
       
    </script>
    <form id="login-form" action="controls/login_check.php" name="findkural" method="post">
        <label><?php if( isset($_SESSION['login_error'])){
            echo  $_SESSION['login_error'];
        }
        ?></label>
    <label>Username </label>
    <input type="test" name="username" id="username" />
    <br>
    <label>Password: </label>
    <input type="password" name="pwd" id="pwd" />
  
    <br>
    <input type="submit" name="login" id="login" value="Login" />
    </form>
    
</body>
</html>