<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="styles/signin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jscript/signin.js"></script>
</head>
<body>
	<div class="wrapper">

		<?php
		include('header.html');
		?>

		<div class="content">
			<div class=login>
				<fieldset style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)),url(img/foxiee.jpg);">	
						<h2>Sign In</h2><br>
						<form method="post" onsubmit="validateForm()" action="php/signinCon.php" name="signinForm">

							<label id="label">Username</label><br>
							<input type="text" name="usern" placeholder="Input Username">
							<br>

							<label id="label">Password</label><br>
							<input type="Password" name="passw" placeholder="Input Password">
							<br>	

							<button type="submit" class="signbtn" name="signbtnx" >Sign In</button>
							<button type="	reset" class="signbtn" name="resbtn">Clear All</button>
							<br><p>Forgot your password? Don't worry you can reset it<a href="#" class="changepw"> here!</a>
							</p>
							<p>Don't have an accout? That's fine too. Create one <a href="#">here!</a></p>
						</form>
				</fieldset>
			</div>
		</div><!-- content -->

		<div class="footer">

			<?php
			include('footer.html');
			?>

		</div>

	</div><!-- wrappper -->
</body>
<!-- coded by IT21174230 -->
</html>