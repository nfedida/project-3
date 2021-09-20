<html>

<head>

<title>Handling Data With Mysql and Json</title>

<link rel="stylesheet" href="assets/style.css">

<style>
td {
  text-align: center;
  font-size:50px;
  background-color:DodgerBlue;
}
</style>

</head>

<body>

<a href="index.php" >Go Back to the Main Page</a><br />

<h2>All the Entries</h2>

<hr>

<table>
	<tr>
		<th>ID</th>
		<th>IMG</th>
		<th>NAME</th>
		<th>Vehicle</th>
		<th>Date and Time</th>
	</tr>

<?php
	//while in the table, get the json data
	$d = file_get_contents('assets/data.json');
	//convert the data to a php array so we can work with it
	$d = json_decode($d, true);

	//loop through the data to create dynamic html
	foreach($d as $k => $o){
		//for each object in our data, create a table row with table cells. in each table cell, concatenate values from the object we are looping through
		echo '<tr text-align: center;>
				<td>'.++$k.'</td>    
				<td width="322"><img src="assets/'.$o['img'].'" style="width:300px; height:auto;" ></td>
				<td>'.$o['name'].'</td>
				<td>'.$o['genre'].'</td>
				<td>'.$o['birthdaytime'].'</td>
			</tr>';
	}
?>

	</table>          
	 
</body>
</html>