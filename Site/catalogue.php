<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Philippou.co.uk</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />


<link type="text/css" href="menu.css" rel="stylesheet" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="menu.js"></script>
	
	
	
	
	<script src="js/dw_event.js" type="text/javascript"></script>
<script src="js/dw_cookies.js" type="text/javascript"></script>
<script src="js/dw_sizerdx.js" type="text/javascript"></script>
<script type="text/javascript">
// setDefaults arguments: size unit, default size, minimum, maximum
// optional array of elements or selectors to apply these defaults to
dw_fontSizerDX.setDefaults("px", 13, 9, 26, ['div#main p.article'] );

// set arguments: default size, minimum, maximum
// array of elements or selectors to apply these settings to
dw_fontSizerDX.set(18, 12, 36, ['div#main h2'] );

dw_Event.add( window, 'load', dw_fontSizerDX.init );
</script>
	
	
	
	
	
	
</head>
<body>

<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="index.php">Festival </a></h1>
		<p><a href="index.php">Shoes Emporio</a></p>
	</div>
	
	<div id="menu">
		<ul class="menu">
			<li><a href="#" class="parent"><span>Home</span></a>
				<div><ul>
					<li><a href="#" class="parent"><span>Sub Item 1</span></a>
						<div><ul>
							<li><a href="#" class="parent"><span>Sub Item 1.1</span></a>
								<div><ul>
								<li><a href="#"><span>Sub Item 1.1.1</span></a></li>
								<li><a href="#"><span>Sub Item 1.1.2</span></a></li>
								</ul></div>
							</li>
							<li><a href="#"><span>Sub Item 1.2</span></a></li>
							<li><a href="#"><span>Sub Item 1.3</span></a></li>
							<li><a href="#"><span>Sub Item 1.4</span></a></li>
							<li><a href="#"><span>Sub Item 1.5</span></a></li>
							<li><a href="#"><span>Sub Item 1.6</span></a></li>
							<li><a href="#" class="parent"><span>Sub Item 1.7</span></a>
								<div><ul>
								<li><a href="#"><span>Sub Item 1.7.1</span></a></li>
								<li><a href="#"><span>Sub Item 1.7.2</span></a></li>
								</ul></div>
							</li>
						</ul></div>
					</li>
					<li><a href="#"><span>Sub Item 2</span></a></li>
					<li><a href="#"><span>Sub Item 3</span></a></li>
				</ul></div>
			</li>
			<li><a href="#"><span>Product Info</span></a>
				<div><ul>
					<li><a href="#" class="parent"><span>Sub Item 1</span></a>
						<div><ul>
						<li><a href="#"><span>Sub Item 1.1</span></a></li>
						<li><a href="#"><span>Sub Item 1.2</span></a></li>
						</ul></div>
					</li>
					<li><a href="#" class="parent"><span>Sub Item 2</span></a>
						<div><ul>
						<li><a href="#"><span>Sub Item 2.1</span></a></li>
						<li><a href="#"><span>Sub Item 2.2</span></a></li>
						</ul></div>
					</li>
					<li><a href="#"><span>Sub Item 3</span></a></li>
					<li><a href="#"><span>Sub Item 4</span></a></li>
					<li><a href="#"><span>Sub Item 5</span></a></li>
					<li><a href="#"><span>Sub Item 6</span></a></li>
					<li><a href="#"><span>Sub Item 7</span></a></li>
				</ul></div>
			</li>
			<li><a href="#"><span>Help</span></a></li>
			<li class="last"><a href="#"><span>Contacts</span></a></li>
		</ul>
	</div>
	
</div>
<!-- end header -->

<!-- start page -->
<div id="main">
<div id="page">
	<!-- start content -->
	<div id="content">
	
	
	<?php 
										@session_start();
											$connection = mysql_connect("philippou.co.uk.mysql", "philippou_co_uk", "gyRxbHg3") or die(mysql_error());
											mysql_select_db("philippou_co_uk", $connection) or die(mysql_error()); 								
									
									
									
										print "<p> Wellcome ".$_SESSION["authenticatedUser"]."</p>";




									?>
	
	
	
	
	
	
	<div class="image">
	<img src="images/1.JPG" width="600" height="250" title="Alien"/>
	</div>
	
		<div class="post">
			<h2 class="title">Choose a Category</h2><br></br>
			
					  <div class="grid10">
<tr>
<td width="173" height="159"><h2 align="top">Catalogue</h2>
<form name="form1" form method="GET" action="catalogue.php">

<label>
<select name="Sort" id="Sort">
<option value="MCasual">Mens Casual</option>
<option value="MAnatomic">Mens Anatomic</option>
<option value="MSport">Mens Sport</option>
<option value="WCasual">Women Casual</option>
<option value="WAnatomic">Women Anatomic</option>
<option value="WSport">Women Sport</option>


</select>
</label>
<label>
<br>
<input type="submit" name="Submit" value="Submit">
</label>
</form>				
				<?php
//connect to the database
$connection = mysql_connect("philippou.co.uk.mysql", "philippou_co_uk", "gyRxbHg3") or die(mysql_error());
		mysql_select_db("philippou_co_uk", $connection) or die(mysql_error()); 

$Sort = $_GET['Sort'];
$query = "SELECT * FROM product WHERE description = '$Sort'";
$result = mysql_query($query) or die ('error getting data');
// see if any rows were returned
if (mysql_num_rows($result)>0) {
//If so, print the table headers
echo "<table border=1>\n<tr>" .
"<th>name</th>" .
"<th>color</th>".
"<th>category</th>".
"<th>size</th>".
"<th>country</th>".
"<th>price</th>" .
"<th>image</th>";
while ($row = mysql_fetch_array($result)) {
echo "<tr>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["color"]."</td>";
echo "<td>".$row["category"]."</td>";
echo "<td>".$row["size"]."</td>";
echo "<td>".$row["country"]."</td>";
echo "<td>".$row["price"]."</td>";

//this line creates a image link to an image in the images directory
echo "<td><img src=images/".$row["image"]." height=80px width=80px /></td>";
echo "</tr>";
} //Finish the while loop
echo "</table>"; //Finsh the table
} //Finish 'if rows found'
else {
// print status message
echo "<p>No item found!<p>";
}



          
      



?>
				
		</div>		
				
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
			
		
	
		
		
	</div>
	<!-- end content -->
	
	<!-- start sidebar -->
	<div id="sidebar">
	<div id="sizer"><a class="increase" href="#" title="Increase text size"><img src="images/plus.gif" alt="" border="0" /></a><a class="decrease" href="#" title="Decrease text size"><img src="images/minus.gif" alt="" border="0" /></a><a class="reset" href="#" title="Restore default font-sizes"><img src="images/reset.gif" alt="" border="0" /></a></div>

	<div id="login">
	<form method="POST" action="login.php">
													  <fieldset>
														  <legend>LogIN </legend>
														  <label for="email">User Name: </label>
														  <input type="text" name="email" id="email"  />
														  <label for="password">Password: </label>
														  <input type="password" name="password" id="password"  />
														  <input type="submit" value="Login" />
														  <input type="reset" value="Clear" />
														  <a href="register.php">Register</a>
														  <a href="index_admin.php">Admin</a>
														   <a href="logout.php">Logout</a>
														</fieldset>
													</form>
	
	
	
	
	</div>
	
		<ul>
			<li>
				<h2>Categories</h2>
				<ul>
					<li><a href="#">Mens</a></li>
					<li><a href="#">Ledies</a></li>
					<li><a href="#">Casual Shoes</a></li>
					<li><a href="#">Sport Shoes</a></li>
					<li><a href="#">Anatomic Shoes</a></li>
					<li><a href="#">Cataloque</a></li>
				</ul>
			</li>
			<li>
				<h2>Industries</h2>
				<ul>
					<li><a href="#">Ecco</a> (23)</li>
					<li><a href="#">Imac</a> (31)</li>
					<li><a href="#">Milan</a> (31)</li>
					<li><a href="#">Armani </a> (30)</li>
					<li><a href="#">Calvin Klein</a> (31)</li>
					<li><a href="#">Aldo</a> (30)</li>
					
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
</div>
</div>
<!-- end page -->

<div id="footer">


	<p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Design by Yiannis Philippou &nbsp;&bull;&nbsp; Festival Shoes Emporio.</p>
 <center> <?php

					$hours = date("G");
					if ( ($hours > 12)&&($hours < 23 )){
						print "Good Afternoon.<br> ";
						}
					else if(($hours <= 23) && ($hours <= 5)){
						print "Good Night.<br> ";
						}
					else {
						print "Good Morning.<br> ";
						}	

					print date("d M Y / H:i:s");

				?>		</center>

	





	</div>
</body>
</html>
