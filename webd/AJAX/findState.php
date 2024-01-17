<?php 


//echo connected great;
//$country='224';
// $country="";
$country = intval($_GET['country']);
$server="localhost";
$username="root";
$password="";
$db="geu";
$con= mysqli_connect($server,$username,$password,$db);
// mysqli_select_db($con,$db);
$query="SELECT country_name,state_name FROM state WHERE country_id='".$country."'";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($result)) 
{
echo "<br />"."countryname: " . $row["country_name"]. " - stateName: " . $row["state_name"]. "<br>";

}
mysqli_close($con);
?>
