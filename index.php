<!DOCTYPE html>
<html>
<head>
<style>
h1 { 
	font-size: 2.5em;
    display: block;
    font-weight: bold;
}
</style>
</head>
<body>

<center><img src="featured.png" alt="featured"></center>
<center><h1>TankFootball.com is currently undergoing maintenance.</h1></center><br>
<center><h2>Please join our mailing list for game and website updates.</h2></center><br>

<center><form method="post" action="index.php">
Email: <input type="text" name="email">
<input type="submit" name="submit" value="submit">
</form></center>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$emailTest = FormatInput($_POST["email"]);
	if (!empty($emailTest) && filter_var($emailTest, FILTER_VALIDATE_EMAIL)){
		Connect($emailTest);
	}
}

function FormatInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function Connect($email){
	// send to database
	$serverhost = "localhost";
	$username = "nug700";
	$password = "f7V9yCRKnEssHb9E";
	//$username = "root";
	//$password = "";
	$dbname = "TankFootballDB";

	$conn = new mysqli($serverhost, $username, $password, $dbname);

	if (mysqli_connect_error()){
		//die("Connection failed: " . mysqli_connect_error());
		echo "<center>Failed to connect to database</center>";
		$conn->close();
		return;
	}

	$query = "CREATE TABLE IF NOT EXISTS `emails`(
			 userid int(6) NOT NULL AUTO_INCREMENT,
			 email varchar(255) NOT NULL,
			 PRIMARY KEY (userid)
			 ) ENGINE=InnoDB DEFAULT CHARSET=utf8
			 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;";
			 
	if (!$conn->query($query) === TRUE) {
		echo "<center>Error creating table: " . $conn->error . "</center>";
		$conn->close();
		return;
	}

	$email = $conn->real_escape_string($email);
	$query = "INSERT INTO emails(email) VALUES (?);";

	if (!($stmt = $conn->prepare($query))){
		echo "<center>Failed to add email!</center>";
		$conn->close();
		return;
	}
	$stmt->bind_param("s", $email);
	if (!$stmt->execute()){
		echo "<center>Failed to add email!</center>";
	}
	
	echo "<center>Email Added!</center>";

	$conn->close();
}
?>

</body>
</html>