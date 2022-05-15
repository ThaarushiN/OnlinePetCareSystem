<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="styles/payment.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="jscript/payment.js"></script>
</head>
<body>

	<div class="wrapper">
		<?php
			include('header.html');
		?>

		<div class="payment">
			<fieldset style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)),url(img/orangekat.jpg);">

				<h2>Payment</h2><br>
				<p>Choose Payment Method</p>
				<form method="post" action="">
					<input type="radio" name="paymethod" id="paymethod" value="Cash On Delivery" onclick="callForm()">
					<label>Cash On Delivery</label>

					<input type="radio" name="paymethod" id="paymethod" value="Credit/Debit Card" onclick="callForm()">
					<label>Credit/Debit Card</label>
					<br>

					<div class="cod" style="visibility:hidden;">
						<label>What would be the most convinient time for you to recieve the package?</label>
						<br>
						<input type="radio" name="when" id="" value="Weekdays">
						<label>Weekdays</label>
						<input type="radio" name="when" id="" value="Weekends">
						<label>Weekends</label>
						<br>
						<input type="checkbox" id="morn" name="morn" value="Morning">
						<label > Morning</label><br>
						<input type="checkbox" id="after" name="after" value="Afternoon">
						<label > Afternoon</label><br>
						<input type="checkbox" id="eve" name="eve" value="Evening">
						<label > Evening</label><br>
					</div>

					<div class="card" style="visibility:hidden;">
						<label>Name On Card</label>
						<input type="text" name="cardname" placeholder="Eg:- Kavishki Perera"><br>
						<label>Card Number</label>
						<input type="" name="cardnum" placeholder="1111-1111-1111-1111"><br>
						<label>Expire Month & Year</label>
						<input type="date" name="exp" id=""><br>
						<label>CVC</label>
						<input type="text" name="cvc" placeholder="123"><br>
						<input type="checkbox" id="savepay" name="savepay" value="Save My Details">
						<label >Save My Payment Details</label><br>
					</div>
					<button type="submit" name="btnsub">Pay</button>
					<button type="reset" name="btnres">Clear</button>
				</form>
			</fieldset>
		</div>

		<div class="footer">
			<?php
			include('footer.html');
			?>
		</div>

	</div><!-- wrapper -->
</body>
</html>