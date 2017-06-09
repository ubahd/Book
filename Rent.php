<?php
include('includes/header2.html');
?>6
				<h1>Search for available books</h1>
		<form id="form" action= "search.php" method= "post">
			<br>ISBN: Required!<input type="text" name="ISBN" required="required"></br>
			<br>Title: &nbsp;&nbsp; <input type="text" name="Title"></br>
			<br>Author: &nbsp;&nbsp; <input type="text" name="Author"></br>
			<br>Year: &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Year"></br>
			<br> <input type="submit" value= "Submit"></br>
		</form>


<?php
include('includes/footer1.html');
?>