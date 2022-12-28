<?php
$un=$_POST["t1"];
$m=$_POST["t2"];
$con=mysql_connect("localhost","root","");
if($con==false)
{
  die("Error in connection");
}
mysql_query("use jwellery");

  $q=mysql_query("select * from registration where  uname='$un'  AND mobile=$m  ");
  
   $res=mysql_fetch_array($q);

   if($res)
         echo("<br><a href='index.php'>  Login Succ..</a> </br>");
   else
        echo("Invalid user name or mobile..");

mysql_close($con);
?>