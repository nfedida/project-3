<!doctype html>
<html>
<head>

<link rel="stylesheet" href="assets/style.css">

<title>Handling Data With Mysql and Json</title>

<style>
  input {
    border: 1px #1a1aff;
    border-radius: 5px;
    background-color:#b3ffec;
    color: black;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width: 400px;
}
</style>

</head>
<body>

<br><hr>

<h2>Enter Your Order Information Below: (over here I am using sql)</h2>

<div>
	<form method="post" action="dh.php">
		<label>Full Name<br>
			<input type="text" name="nm" placeholder="George Smith">
		</label>
		<br><br>
		<label>Password<br>
			<input type="password" name="pw" placeholder="At least 9 digits">
		</label>
		<br><br>
		<label>Email<br>
			<input type="email" name="em" placeholder="George.Smith@gmail.com">
		</label>
		<br><br>
		<label>Address<br>
			<input type="address" name="ad" placeholder="55 Main st Brooklyn NY">
		</label>
		<br><br>
		<label>Model<br>
			<input type="model" name="mo" placeholder="Old or New">
		</label>
		<br><br>
		<label>Size<br>
			<input type="Size" name="si" placeholder="Small or Big">
		</label>
		<br><br>

		<label>Submit and View the Entries<br></label>
		<input type="image" value="Store Info" src="https://www.w3schools.com/html/img_submit.gif" alt="Submit" width="60" height="60" >
	</form>
</div>

<br><hr>

<h2>Fill in a New Profile (over here I am using json file)</h2>

<div>

<form action="assets/process.php" method="post" enctype="multipart/form-data">

  <label>First and Last Name<br>
    <input type="text" name="name" placeholder="John Smith">			
  </label>

  <br><br>

  <label>Choose a Car Type</label><br>
    <input type="radio" name ="genre" value="Sedan"> Sedan
  </label>

  <br>

  <label>
	<input type="radio" name="genre" value="SUV"> SUV
  </label>

  <br>

  <label>
	<input type="radio" name="genre" value="Hybrid"> Hybrid
  </label>

  <br><br>

  <label>Date and Time</label><br>
  <input type="datetime-local" name="birthdaytime">

  <!-- <br>
  <label for="birthdaytime">Birthday (date and time):</label>
  <input type="datetime-local" id="birthdaytime" name="birthdaytime"> -->

  <br><br>

  <label>Choose a Car Image</label><br>
  <label>
	<input type="file" name="pic">
  </label>

  <br><br>
  <label>Submit and View the Entries<br></label>
  <input type="image" value="submit" src="https://www.w3schools.com/html/img_submit.gif" alt="Submit" width="60" height="60" >

</form>
</div>

<hr>

<br><br><br><br><br><br><br>

</body>
</html>




	
	


	
