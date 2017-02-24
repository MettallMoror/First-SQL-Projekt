<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">  <!-- import code of mystyle.css -->
<style> body {background-color:#00fff0;}</style>	<!-- create a color for the background -->
<meta charset="UTF-8">	<!-- for spezial characters like Ü,Ö,Ä -->	
<title>homepage</title>
</head>
<body>
<p>
<h1>Read and Display Database(page for enduser)</h1>
</p>
<p>
<?php
// set variables, you need to create a database before, either with external Server or your PC, searching for PHPMyAdmin
$servername = "localhost:1111 ";		//local testing ;)
$username = "yourdb";
$password = "database";		//bad password
$dbname = "name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Select what you need
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
</p>
<br/>
<footer><a href="second.php">You are the owner or technician? <br> <!-- going to next page -->
<b>click here to change data</b></a><br/>
<div class="menu">
<?php include 'header.php';?>
</div></footer>


</body>
</html>