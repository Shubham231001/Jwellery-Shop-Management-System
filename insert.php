<?php
$name=$_POST["t1"];
$address=$_POST["t2"];
$mobno=$_POST["t3"];
$email=$_POST["t4"];
$con=mysql_connect("localhost","root","");
if($con==false)
{
  die("Error in connection");
}
mysql_query("use  jwellery");
mysql_query("insert into registration values('$name','$address',$mobno,'$email')");
echo("<h1> Your Registration Sucessfull...");
echo("<br><a href='login.php'> Goto Login</a> </br>");
mysql_close($con);
?>