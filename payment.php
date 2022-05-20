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

				<!-- <button name="paycod" id="cod" >Cash on Delivery</button>
				<button name="paycard" id="card" >Credit/Debit Card</button> -->

				<input type="submit" name="paycod" id="cod" value="Cash On Delivery" onclick="callForm1()">
				<input type="submit" name="paycard" id="card" value="Credit/Debit Card" onclick="callForm2()">

				<form method="post" action=""  id="when" style="display: none;">
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
					<!-- <button type="submit" name="subcod">Submit</button> -->
					<input type="submit" name="subcod">
				</form>

				<form method="post" action="" id="paycard" style="display: none;">
					<label>Name On Card*</label>
					<input type="text" name="cardname" placeholder="Eg:- Kavishki Perera" required><br>
					<label>Card Number*</label>
					<input type="" name="cardnum" placeholder="1111-1111-1111-1111" required><br>
					<label>Expire Month & Year*</label>
					<input type="date" name="exp" id="" required><br>
					<label>CVC*</label>
					<input type="text" name="cvc" placeholder="123" required><br>
					<input type="checkbox" id="savepay" name="savepay" value="Save My Details">
					<label >Save My Payment Details</label><br>
					<!-- <button type="submit" name="btnsub">Pay</button>
					<button type="reset" name="btnres">Clear</button> -->
					<input type="submit" name="btnsub" value="Pay">
					<input type="reset" name="btnres" value="Clear">
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