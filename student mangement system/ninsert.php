<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => student
		$conn = mysqli_connect("localhost", "root", "", "student");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$mes = $_REQUEST["mes"];
		$info = $_REQUEST['ifo'];
		// Performing insert query execution
		// here our table name is student
		$sql = "INSERT INTO nodi VALUES ('$mes','$mes')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored successfully.</h3>";
				header('Location:homeadmin.php');
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
