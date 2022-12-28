<! DOCTYPE html>
<html>
<style>
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
body{
	width:100%;
	height:100%;
}
.parentDivForCards{
	width:100vw;
	min-height:100vh;
	display:flex;
	align-items:center
	justify-content:center;
	flex-wrap:wrap;
}
.card{
	display:flex;
	align-items:center;
	justify-content:center;
	flex-direction:column;
	margin:10px;
	
}

.card a{
	text-decoration:none;
}

.card img{
	width:300px;
}
</style>
<body>
	<div class="parentDivForCards">
		<div class="card">
			<img src="br1.jpg"/>
			Navya simple bracelet.RS.60<br>
                          <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Navya simple bracelet">
                          <input type="hidden" name="t2" value="60">

                         <input type="submit" value="Buy Now">
                       </form>

                     
		</div>

		<div class="card">
			<img src="br2.jpg"/>
			Classic divya bracelet.RS.80<br>
                         <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Classic divya bracelet">
                          <input type="hidden" name="t2" value="80">

                         <input type="submit" value="Buy Now">
                       </form>

		</div>

		<div class="card">
			<img src="br3.jpg"/>
			Heart charm bracelet.RS.100</a>
                          <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Heart charm bracelet">
                          <input type="hidden" name="t2" value="100">

                         <input type="submit" value="Buy Now">
                       </form>

		</div>
		<div class="card">
			<img src="br4.jpg"/>
			Games heart charm bracelet.RS.100</a>
                          <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Games heart charm bracelet">
                          <input type="hidden" name="t2" value="100">

                         <input type="submit" value="Buy Now">
                       </form>

		</div>
		<div class="card">
			<img src="br5.jpg"/>
			Simple chain bracelet.RS.40</a>
                         <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Simple chain bracelet">
                          <input type="hidden" name="t2" value="40">

                         <input type="submit" value="Buy Now">
                       </form>

                         
		</div>
		<div class="card">
			<img src="br6.jpg"/>
			Old fashion bracelet.RS.50</a>
                         <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Old fashion bracelet">
                          <input type="hidden" name="t2" value="50">

                         <input type="submit" value="Buy Now">
                       </form>
		</div>
		<div class="card">
			<img src="br7.jpg"/>
			Bluestone games bracelet.RS.100</a>
                         <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Bluestone games bracelet">
                          <input type="hidden" name="t2" value="100">

                         <input type="submit" value="Buy Now">
                       </form>

		</div>
		<div class="card">
			<img src="br8.jpg"/>
			Blackstone bracelet.RS.60</a>
                         <form method="post" action="jbill.php">
                          <input type="hidden" name="t1" value="Blackstone bracelet">
                          <input type="hidden" name="t2" value="60">

                         <input type="submit" value="Buy Now">
                       </form>
		</div>
		
	</div>
</table>
</body>
</html> 
