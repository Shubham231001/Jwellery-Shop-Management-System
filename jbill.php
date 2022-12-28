<html>
<body bgcolor="white">


<form method="post" action="jbill1.php">
<br><br><center><font size="8" color="black">*MAHALE JWELLERS*</font><br>
<font size="6" color="blue">SHRIRAMPUR,MAHARASHTRA,760000(MH 17)</font><br><br><br>
<fieldset><center><font size="5" color="black">BILL</font><br><br>

BILL NO:<input name="t1" type="text" placeholder="enter bill no">
DATE:<input name="t2" type="DATE" placeholder="enter DATE"><br><br><br>
CUSTOMER NAME:<input name="t3" type="text" placeholder="enter name">
MOBILE NUMBER:<input name="t4" type="text" placeholder="enter mobile"><br><br><br>
ADDRESS:<input name="t5"  type="text" placeholder="enter address">
JWELLERY NAME:
<input name="t6"  type="text" value="<?php echo($_POST['t1']);?>"> <br><br>

PRICE:<input name="t7"  type="text"  value="<?php echo($_POST['t2']);?>"><br><br>

<input type="submit" value="save and print">
<input type="reset" value="clear">
</form><br><br>
<a href="index.php">home</a>
<br>