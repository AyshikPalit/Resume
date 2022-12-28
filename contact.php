<!DOCTYPE html>
<html>
<head>
	<title>Insert Page2</title>
</head>
<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "Test");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
        $subject = $_REQUEST['subject'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		

		$sql = "INSERT INTO Contact VALUES ('$name','$subject','$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			 echo "<h3>Data submitted successfully. Thank You...</h3>";
		} 
		
		else{
			echo "ERROR: 404  Not Found. $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
		?>
	</center>
</body>
</html>