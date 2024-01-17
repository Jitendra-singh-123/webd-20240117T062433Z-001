<!DOCTYPE html>
<?php
// COOKIE IS A SMALL FILE THAT SEREVER EMBEDS ON CLIENTS COMPUTER .EACH TIME THE SAME COMPUTER REQUEST A PAGE WITH A BROWSER, WILL SEND THE COOKIE TOO IN HTTP HEADER 
$cookie_name="User_name";
$cookie_value="vicky singh";

// setcookie(name, value, expire, path, domain, secure, httponly);
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/"); //86400 = 1 day and 86400*30 for 30 days cookie will be alive
// Deleting Cookie with PHP
// setcookie( "name", "", time()- 60, "/","", 0)
?>
<html>

<body>
  <?php
  if(!isset($_COOKIE[$cookie_name])){
      echo "Cookie named: ". $cookie_name ." is not set!";
  }  
  else{
      echo "cookie: ". $cookie_name ." is set! <br>";
      echo "Value is: ". $_COOKIE[$cookie_name];
  }
  ?>
  <p><strong>NOTE:</strong>You might have to reload the page to see the value of the cookie</p>
</body>
</html>