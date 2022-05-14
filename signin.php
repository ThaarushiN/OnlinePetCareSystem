<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="styles/signin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<?php
		include('header.html');
		?>

		<div class="content">
			<div class=login>
				<fieldset style="background-image: url(img/foxiee.jpg);">	
						<legend>Sign In</legend>
						<form method="post" onclick="" action="">
							<label id="label">Name</label>
							<input type="text" name="usern" placeholder="Input Username">
							<br>
							<label id="label">Password</label>
							<input type="Password" name="passw" placeholder="Input Password">
							<br>	
							<button type="submit	">Sign In</button>
							<button type="	reset">Clear</button>
							<br><p>Forgot your password? Don't worry you can reset it<a href="#"> here!</a>
							</p>
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
</html>