<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="icon" href="m.jpg" type="image/gif">
<style>
a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
		<style>       
hr.new1 {
  border: 1px solid black;
}
</style>

	<title>MPTI</title>
	
</head>

<body>
<body style="background-color:#ffffd5;">
<form action="insert.php" method="post">
	<center>
		
		<h1 style=>Muthayammal Polytechnic Institution</h1>
		<hr class="new1">
		<h2>MANAGEMENT INFORMATION SYSTEM</h2>
		<hr class="new1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		</center>
						&nbsp;
				&nbsp;
					&nbsp;
		<font face="cinzel" size="3">
		<div class="w3-bar w3-red">
  <a href="homeadmin.php" class="w3-bar-item w3-button w3-mobile">HOME</a>
  
  <a href="index.php" class="w3-bar-item w3-button w3-mobile">LOGIN</a>
  
  <a href="view.php" class="w3-bar-item w3-button w3-mobile">VIEW</a>
  
  <a href="delete.php" class="w3-bar-item w3-button w3-mobile">DELETE</a>
</div>
		<hr>
		
		
		</font>
		<center>
		<hr>




<?php
mysql_select_db('student',mysql_connect('localhost','root',''));
?>
<html>
<body>
<table border="1">

<center>
<form action="aten.php" method="post">
<table id="customers">
<tr>
<th>Register number</th>
<th>Roll number</th>
<th>name</th>
<th>ADDENTANCE</th>


</tr>
<?php
$books_query=mysql_query("select * from student");
while($books_rows=mysql_fetch_array($books_query)){
		setcookie( "regno", $books_rows['regno'], time()- 60, "/","", 0);
?>

    <tr>
    <td><?php echo $books_rows['regno']; ?></td>
    <td><?php echo $books_rows['rollno']; ?></td>
    <td><?php echo $books_rows['first_name']; ?></td>
																			

<td> <input type="radio" name="score[<?php echo $books_rows['regno'] ?>]" id="<?php echo $books_rows['regno'] ?>" maxlength="24" size="4" value="Present">Present <br><input type="radio"name="score[<?php echo $books_rows['regno'] ?>]" id="<?php echo $books_rows['regno'] ?>" maxlength="24" size="4" value="Absent">Absent<br><input type="radio" name="score[<?php echo $books_rows['regno'] ?>]" id="<?php echo $books_rows['regno'] ?>" maxlength="24" size="4" value="OD">OD</td>

	
	

    </tr>
<?php
}
?>

</table>
<input type =  "submit" id = "btn" value = "submit" /> 
</form>
<?php 
	if (isset($_GET['edit'])) {
		$regno = $_GET['edit'];
		$update = true;
		$record = mysql_query("SELECT * FROM student WHERE regno=$regno");		
		$n = mysqli_fetch_array($record);
		$regno = $n['regno'];		
	}
?> 
   


</body>
</html>