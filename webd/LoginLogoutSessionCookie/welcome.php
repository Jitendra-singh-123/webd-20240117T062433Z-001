<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
<style>

body
{

color:red;
}
</style>
</head>

<body bgcolor="pink">

<?php
session_start();
 echo"welcome  your email is  ".$_SESSION['email'];
 echo"<br/>";
 echo"your password is ".$_SESSION['pass'];
      echo"<br/>";
 echo"<a href=logout.php>logout</a>";
?>

</body>
</html>