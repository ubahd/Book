<?php
include('includes/header2.html');
$_GET['id'];

		echo '<h1> Card information</h1><br>';
		echo '<form id="form" action= "rent1.php" method= "post">';
		echo	'<br> Debit card (16-Digit): <input type="password" name="Debcard" required="required"></br>';
		echo	'<br> Name on Card: <input type="text" name="Name"></br>';
		echo	'<br> Expiration date (MM/YY): <input type="text" name="Exp"></br>';
		echo	'<br> CVV Code: <input type="text" name="cvv"></br>';
		echo	'<br> <input type="hidden" name="BookID" value="'.$_GET['id'].'"></br>';
		echo	'<br><input type="submit" value= "Submit">';
		echo '</form>';
?>

<?php
include('includes/footer1.html');
?>