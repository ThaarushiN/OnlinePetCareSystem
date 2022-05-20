<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pawsies.lk</title>
	<link rel="stylesheet" type="text/css" href="styles/homestyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<script src="jscript/header.js"></script>
</head>
<body>
	<div class="wrapper">


		<?php
			include('header.html');
		?>

		<div class="socialmedia">
			<ul>
				<li><a href="#"><i class="fa fa-facebook fa-lg	"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram fa-lg	"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter fa-lg	"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp fa-lg	"></i></a></li>
			</ul>
		</div><!-- socialmedia -->	
			 

		<div class="content">

			<div class="banner">
				<img src="img/salebanner.jpg">
			</div>

			<div class="prodlink">
				<h3>Find stuff you absolutely love for the furbaby you certainly love!!!</h3>
				<table>
					<tr>
						<td><a href="#"><img src="img/catmilk.jpg" class="circle"></a><br>Pet Food</td>
						<td><a href="#"><img src="img/cattshirt.jpg" class="circle"></a><br>Pet Clothes</td>
						<td><a href="#"><img src="img/dogtoy.jpg" class="circle"></a><br>Pet Toys</td>
					</tr>

				</table>
			</div>

			<div class="carousel">
				<div class="prod">
					<img src="img/catmilk.jpg">
				</div>
				<div class="prod">
					<img src="img/dogbed.jpg">
				</div>
				<div class="prod">
					<img src="img/hamsterwheel.jpg">
				</div>
				<div class="prod">
					<img src="img/catchewtoy.jpg">
				</div>
				<div class="prod">
					<img src="img/fishfeed.jpg">
				</div>
			</div>
			<a class="prev" onclick="navi()"></a>
  			<a class="next" onclick="navi()"></a>
  			<br>
  			<div><!-- dot -->
  				
  			</div>

		</div><!-- content -->


		<div class="footerlink" >
			<div class="logo">
				<!-- <video autoplay>
  				<source src="img/pawsies2.mp4" type="video/mp4"> 
				Your browser does not support the video tag.
				</video><br> -->
				<img src="img/pawsies2.gif">
				<a href="mailto:pawsies@pawsies.lk">pawsies@pawsies.lk</a>
				<a href="tel:075-77774441">075-77774441</a>
			</div>

			<div class="service">
				<h3>We provide you...</h3><br>
				<ul>
					<li>Vet appointment booking</li><br>	
					<li>Booking the best pet sitters</li><br>	
					<li>A wide range of pet products</li><br>	
				</ul>
			</div>

			<nav class="quicklink">
				<ul>
					<li id="left"><a href="#">Home</a></li>
					<li id="left"><a href="#">Sign Up</a></li>
					<li id="left"><a href="#">Shop</a></li>
					<li id="right"><a href="#">About Us</a></li>
					<li id="right"><a href="#">Blog</a></li><
					<li id="right"><a href="#">Feedback</a></li>
				</ul>
			</nav>
		</div><!-- footerlink -->
		

	</div><!-- wrapper -->

</body>
</html>