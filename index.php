<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pawsies.lk</title>
	<link rel="stylesheet" type="text/css" href="styles/homestyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ea51cf5404.js" crossorigin="anonymous"></script>
	<script src="jscript/header.js"></script>
	<script src="jscript/homescript.js"></script>
</head>
<body>
	<div class="wrapper">


		<div class="topbar">
			<div class="menu">
				<button class="verticalmenu" onclick="hideCont()" name="menubtn">
					<i class="fa fa-bars fa-lg"></i>
				</button>
				<div id="menuitem" style="visibility: hidden;" >
					<a href="#">Search by Pet</a>
					<a href="#">Vet Channeling & Pet Sitting</a>
					<a href="#">Pet Advice</a>
					<a href="#">Shop</a>
				</div>
			</div><!- menu -->

			<div class="searchbar">
				<form method="get" action="">
					<input type="text" name="searchbox" placeholder="	Search..." id="searchbar">
					<button type="submit" name=btnsearch><i class="fa fa-search fa-lg	"></i></button>
				</form>
			</div><!-- searchbar --> 

			<div class="logo">
				<img src="img/logo2.png">
			</div>
			<div class="dashboard">
				<a href="#"><i class="fa fa-user-o fa-lg	"></i></a>
			</div> 

			<div class="gotocart">
				<a href=""><i class="fa fa-shopping-cart fa-lg	"></i></a>
			</div> 
		</div><!-- topbar -->	


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
						<td><a href="#"><img src="img/catmilk.jpg" class="circle"><br>Pet Food</a></td>
						<td><a href="#"><img src="img/cattshirt.jpg" class="circle"><br>Pet Clothes</a></td>
						<td><a href="#"><img src="img/dogtoy.jpg" class="circle"><br>Pet Toys</a></td>
					</tr>	
					<tr>
						<td><a href="#"><img src="img/pedmed.jpg" class="circle"><br>Medication</a></td>
						<td><a href="#"><img src="img/cathouse.jpg" class="circle"><br>Pet Furniture</a></td>
						<td><a href="#"><img src="img/souve.jpg" class="circle"><br>Gift Items</a></td>
					</tr>

				</table>
			</div>

			<div class="carousel">
				<h3>All Time Favourites!!</h3>
				<!-- <button id="btnprev"><i class="fa-solid fa-angles-left"></i></button>
				<button id="btnnext"><i class="fa-solid fa-angles-right"></i></button>
				<i class="fa-solid fa-angles-left" id="btnprev">
				<i class="fa-solid fa-angles-right" id="btnnext"> -->
				<div class="prod">
					<img src="img/5.jpg" id="last">
					<img src="img/1.jpg">
					<img src="img/2.jpg">
					<img src="img/3.jpg">
					<img src="img/4.jpg">
					<img src="img/5.jpg">
					<img src="img/1.jpg" id="first">
				</div>
			</div>
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
<!-- coded by IT21174230 -->
</html>