<html>
<center><<body bgcolor="orange" >>
<form method="post" action="productinfo.php">
<font size="6" color="blue" face="MV boli">Enter the product ID:</font>
<input type="text" name="t1">
</body>
</html>

<?php
$con=MYSQL_CONNECT("localhost","root","");

if(!$con)
{
 die("error in connection");
}
else
 { 
   MYSQL_QUERY("use shubham");
  $n=$_POST["t1"];
 $res=MYSQL_QUERY("select * from productinfo where id=$n;");

 echo'<center><table border=5 title="MAHALE JWELLER">';
 
 if($row=MYSQL_FETCH_ARRAY($res))
  {

                echo'<tr height="50" >';
             echo'<td><font color="black" size="6">ID</font></td>';
             echo"<td>$row[id]</td>";
                echo'</tr>';

                echo'<tr height="50">';
            echo'<td><font color="black" size="6">Name</td>';
            echo"<td>$row[name]</td>";
                echo'</tr>'; 

                echo'<tr height="50">';
            echo'<td><font color="black" size="6">Price</td>';
            echo"<td>$row[price]</td>";
                echo'</tr>';
 
            echo'<tr height="50">';
            echo'<td><font color="black" size="6">Discount</td>';
            echo"<td>$row[discount]</td>";
                echo'</tr>';
  
            echo'<tr height="50">';
            echo'<td><font color="black" size="6">Ptype</td>';
            echo"<td>$row[ptype]</td>";
                echo'</tr>';



 echo'  <tr height="50">
  <td><font color="black" size="6">Customer Name:</td>
  <td><input type="text" name="name" required></td>
 </tr> 
      <tr height="50">


  <td><font color="black" size="6">Address:</td>
  <td><input type="text" name="address" required></td>
 </tr> 
      <tr height="50">


  
   <td><font color="black" size="6">Email:</td>
   <td><input type="email" name="email" required></td>
  </tr>


  <td><font color="black" size="6">Password:</td>
  <td><input type="password" name="passwoed" required></td>
 </tr>
      <tr height="50">
  
   <td><font color="black" size="6">Gender:</td>
   <td>
     <input type="radio" name="gender" value="m" required>Male      
     <input type="radio" name="gender" value="f" required>Female 
   </td>
  </tr>
 
  <tr height="50">
   <td> <font color="black" size="6">Phone no:</td>
    <td>
     <select name="phoneCode" required>
     <option selected hidden value="">Select Code</option>
     <option value="91">91</option>
     <option value="93">93</option>
     </select>
    <input type="phone" name="phone" required>
    </td>
    </tr>
    <tr height="50">
    <td><input type="submit" value="Submit" name="submit"></td>
     <td width="400"><input type="reset" value="reset name"reset"></td>
 
   </tr>
';       


           }
else
                         {
                           echo("<br>not found");
                         }
}
  mysql_close($con);
?>
</body>
</html>                 