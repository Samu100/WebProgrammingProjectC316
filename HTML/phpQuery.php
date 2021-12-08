<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





<?php
/*
$servername = 'localhost';
$username = 'username';
$password = 'password';


$db = new mysqli($servername, $username, $password);
if($db->connect_error){
	die("Connection Failed: " . $db->connect_error);
}

$sql = "CREATE DATABASE artDB";
if($db->query($sql) === TRUE){
	echo ("created");
}

mysqli_select_db("artDB", $db);
$sql = "CREATE TABLE Sculptures
(
	Title varchar(15)
) ";"

mysqli_query("INSERT INTO Sculptures (Title) VALUES ('The Bean')");
mysqli_query("INSERT INTO Sculptures (Title) VALUES ('Lincoln Memorial')");
mysqli_query("INSERT INTO Sculptures (Title) VALUES ('Statue of David')");
mysqli_query("INSERT INTO Sculptures (Title) VALUES ('Venus de Milo')");
mysqli_query("INSERT INTO Sculptures (Title) VALUES ('Jeff the Balloon')");
mysqli_query("INSERT INTO Sculptures (Title) VALUES ('Nefertiti Bust')");

*/
?>

<html>
	<head> 
	</head>
	<body>
	<h1>Search MySQL</h1>

	<?php
		$query = "SELECT * FROM artDB";
		mysqli_query($db, $query) or die("Error searching");
	?>

	<?php
		$results = mysqli_query($db, $query);

		while ($row = mysqli_fetch_array($results)){
			echo $row['Title']
		}
	?>

	<?php
		mysqli_close($db);
	?>
	</body>
</html>
