<?php 
session_start(); 

// Check if we have already created a authenticated session 

if (isset($_SESSION["authenticatedUser"])) { 

$_SESSION["message"] = "You are already logged in as ". $_SESSION['authenticatedUser']; 

} 

?> 
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
	
	
	
<script type="text/javascript"><!-- background color



function blue()

{

document.body.style.backgroundColor="#CCFFFF"

}

function green()

{

document.body.style.backgroundColor="#CCFFCC"

}

function yellow()

{

document.body.style.backgroundColor="#FFFFCC"

}

function white()

{

document.body.style.backgroundColor="white"

}
	// -->

</script>
	
	
	

	
	<script>   //link sound
  function play(){
       var audio = document.getElementById("audio");
       audio.play();
                 }
   </script>

	
	
	
	
	   <script src="Drag.js"></script> 
	
	
	
	
	
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

														echo "<h3><font color=red>".$_SESSION['message']."</font></h3>"; //Output any the error message - 
													?>
	
	
	<div class="image">
	<img src="images/1.JPG" width="600" height="250" title="Alien"/>
	</div>
	
		<div class="post">
			<h2 class="title">Welcome to Festival Shoes Emporio Online store</h2>
			
			<div class="grid10 ">
				<p>Welcome to our online shoe  store here you will find a large number of out of fashon shoes...</p>
				
			</div>
			<p class="meta"><a href="#" class="more">Read More</a> </p>
		</div>
	
		
		<div class="post">
			<h2 class="title">Choose a category</h2>
			
			<div class="grid10 ">
				<div class="grid5 ">
				<img src="images/men.png" width="250" height="150" title="Men"/>
				</div>
			
			    <div class="grid4 ">
				<img src="images/women.png" width="250" height="150" title="Women"/>
				</div>
			
			</div>
			
			
			

		</div>
	</div>
	<!-- end content -->
	
	<!-- start sidebar -->
	<div id="sidebar">
	<div id="sizer"><a class="increase" href="#" title="Increase text size"><img src="images/plus.gif" alt="" border="0" /></a><a class="decrease" href="#" title="Decrease text size"><img src="images/minus.gif" alt="" border="0" /></a><a class="reset" href="#" title="Restore default font-sizes"><img src="images/reset.gif" alt="" border="0" /></a></div>
	
	
	<h4> <a href="#" onclick="blue()">light blue</a></h4>
	<h4> <a href="#" onclick="white()">White</a></h4>
	<h4> <a href="#" onclick="yellow()">light yellow</a></h4>
	<h4> <a href="#" onclick="green()">light green</a></h4>
	

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
	
	<audio id="audio" src="click.ogg" ></audio>
	
		<ul>
			<li>
				<h2>Categories</h2>
				<ul>
					<li><a href="#" onclick="play()" src="click.ogg">Mens</a></li>
					<li><a href="#" onclick="play()" src="click.ogg">Ladies</a></li>
					<li><a href="#" onclick="play()" src="click.ogg">Casual Shoes</a></li>
					<li><a href="#" onclick="play()" src="click.ogg">Sport Shoes</a></li>
					<li><a href="#" onclick="play()" src="click.ogg">Anatomic Shoes</a></li>
					<li><a href="#" onclick="play()" src="click.ogg">Cataloque</a></li>
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

	

	
	
	
	
	
	
	
	<div id="window" style="position:absolute; z-index:10; left:350px; top:160px; width:400px;background-color:#dde3eb; border:1px solid #464f5a; ">

   <div style="padding-bottom:8px; width:400px; background-color:#718191; border-bottom:1px solid #464f5a;" onMouseDown="beginDrag(this.parentNode, event);">

      <div style="position:absolute; top:2px; left:5px; font-size:16px; font-weight:bold; color:#FFFFFF;">Drag me!</div>

      <div style="position:absolute; top:3px; left:377px; float:right;" onClick="this.parentNode.parentNode.style.display = 'none';">

         <img src="How can I create a floating window on my html page.files/close_btn.gif" border="0"/>

      </div>

   </div>
<br/>
   <div style="margin-left:20px;">your content here...</div>

   <div style="margin-left:30px;">your content here...</div>

   <div style="margin-left:40px;">your content here...</div>
<br/>

</div>



	
	
	
	
	
	
	


	
	
	


	</div>
</body>
</html>
