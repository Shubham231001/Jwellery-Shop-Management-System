<?php
$bno=$_POST["t1"];
$bdate=$_POST["t2"];
$cname=$_POST["t3"];
$mob=$_POST["t4"];
$address=$_POST["t5"];
$jname=$_POST["t6"];
$total=$_POST["t7"];

$con=mysql_connect("localhost","root","");
if($con==false)
{
  die("Error in connection");
}
mysql_query("use jwellery");

mysql_query("insert into bill values($bno,'$bdate','$cname',$mob,'$address','$jname',$total)");

  echo("<h1> <a href='index.php'><b>Thanks for visiting.Your order is Done...</b> </a>");  
mysql_close($con);

?>
