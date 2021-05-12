<?php
	include '../config/dbconfig.php';
	if (isset($_POST))
	{
		$first = $_POST['first'];
		$last = $_POST['last'];
		$other = $_POST['other'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$pass1 = $_POST['pass1'];

		$query = "INSERT INTO employees (first, last, other, email, pass, pass1) VALUES ('$first', '$last', '$other', '$email', '$pass', '$pass1');";
		
    	$result = mysqli_query($link, $query);

    	if ($result)
		{
			echo $first." ".$last." is Successfully Registered";
		}

		else
		{
			echo "Unable to Add employee, Please try again";
		}

	   mysqli_close($link);
	}

	else
	{
		echo "There was an error occur, Please try again";
	}
?>