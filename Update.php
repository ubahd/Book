<?php
	include ('includes/header3.html');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
		if(isset($_POST['ISBN'], $_POST['author'], $_POST['title'], $_POST['year'])){

			$ISBN= $_POST['ISBN'];
			$author= $_POST['author'];
			$title= $_POST['title'];
			$year= $_POST['year'];
		

			include('\xampp\db\mysqli_connect.php');
			$myquery= mysqli_query($dbc ,"SELECT * from books1 where ISBN = '$ISBN'");
			$row = mysqli_num_rows($myquery);
			
			if($row == 0){	
				$myquery2= mysqli_query($dbc ,"SELECT * from books1");
				$count= mysqli_num_rows($myquery2);
				$myquery3= mysqli_query($dbc ,"INSERT INTO books1 VALUES ('','$ISBN','$author','$title','$year','Available')");
				$myquery4= mysqli_query($dbc ,"SELECT * from books1");
				$count2= mysqli_num_rows($myquery4);

				if ($count2 > $count){
					echo '<br> <h2 align="center"> You have succesfully updated the book.</br>';
					echo '<br><a align="center" href="show2.php"> Click here to view added books </a></h2></br>';
					include ('includes/footer1.html');
                	die;
            
				}
				
			}


			if($row > 0){
				$myquery6= mysqli_query($dbc ,"SELECT * from books1 where ISBN = '$ISBN'");
				$roww = mysqli_fetch_assoc($myquery6);
				$bid = $roww['Book_ID'];
				$myquery5= mysqli_query($dbc ,"UPDATE books1 set Status ='Available' where Book_ID = '$bid'");
				$myquery7= mysqli_query($dbc ,"DELETE from rent where ISBN = '$ISBN'");
				echo '<br> <h2 align="center"> You have succesfully updated the book.</br>';
				echo '<br><a align="center" href="show2.php"> Click here to view added books </a></h2></br>';
                die;
               
			}

		}
	
		else {
			echo '<h2 align="center">Please enter the right information</h2>';
		}

	}

?>

<h1>Add Books</h1>
<form id="form" action="Update.php" method="post">
	<br>ISBN #: <input type="text"  name="ISBN" required="required" value="<?php if (isset($_POST['ISBN'])) echo $_POST['ISBN']; ?>" /></br>
	<br>Author: <input type="text"  name="author" value="<?php if (isset($_POST['author'])) echo $_POST['author']; ?>" /></br>
	<br>Title: &nbsp; &nbsp;<input type="text" name="title" value="<?php if (isset($_POST['title'])) echo $_POST['title']; ?>" /></br>
	<br>Year: &nbsp; &nbsp; <input type="text"  name="year" value="<?php if (isset($_POST['year'])) echo $_POST['year']; ?>" /></br>
	<br><input type="submit" name="submit" value="Add book" /></br>
</form>

<?php include ('includes/footer1.html'); ?>