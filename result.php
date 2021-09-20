<!doctype html>
<html>
<head>
<title>MYSQL Play</title>

<!-- ----------------------------------------------------- -->
<style>
  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #D6EEEE;
  }	
</style>
<!-- ----------------------------------------------------- -->

</head>
<body>

<a href="index.php" >Go Back to the Main Page</a><br />

	<h2>All the Entries</h2>

	<table>
		<tr>
			<th>User ID</th>
			<th>First Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Home Address</th>
			<th>Product Model</th>
			<th>Product Size</th>
		</tr>

		<?php 
			$cnt = mysqli_connect('localhost', 'root', 'root', 'demosp21');
			$qry = "SELECT * FROM `demosql`";
			$results = mysqli_query($cnt, $qry);

			foreach($results as $v){
				echo'
					<tr>
						<td>'.$v['uid'].'</td>
						<td>'.$v['nm'].'</td>
						<td>'.$v['em'].'</td>
						<td>'.$v['pw'].'</td>
						<td>'.$v['ad'].'</td>
						<td>'.$v['mo'].'</td>
						<td>'.$v['si'].'</td>	
					</tr>
				';
			};
			mysqli_close($cnt);
		?>
	</table>



</body>
</html>