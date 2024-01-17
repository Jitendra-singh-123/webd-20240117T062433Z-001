<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body bgcolor="pink">

<?php
    session_start();
    session_destroy();
    if(isset($_COOKIES['email'])and isset($_COOKIES['pass']))
      {
          $email= $_COOKIES['email'];
           $pass= $_COOKIES['pass'];
           setcookie('email','$email',time()-60);
           setcookie('pass','$password',time()-60);
           }
    echo "you successfully logout. <br/>click here to login again<br/><a href=' login.php '>try again</a>";
?>
 
 <form>

 </form>
</body>
</html>