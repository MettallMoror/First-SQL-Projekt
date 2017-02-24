<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="UTF-8">		
<title>id or name</title>
</head>
<body>
<p>
<div class="menu">
<?php include 'header.php';?>
</div><br/>
<h1>Filtering to id or names</h1>
</p>
<p>
<?php
// set variables
$servername = "localhost:1111 ";
$username = "yourdb";
$password = "database";
$dbname = "name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//bad solution, "if""or" other ways, doesnt worked for me
	Switch (isset($_POST)) {
		case null !== ($fid = $_POST["numid"]):
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE id = " . $fid . "";
break;
case null !== ($fin = $_POST["firstn"]):
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE firstname LIKE '{$fin}%'";
break;
case null !== ($las = $_POST["lastn"]):
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname LIKE '{$las}%'";
break;
		default: continue;		//I
}								//I
$result = $conn->query($sql);	//I
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
</body>
</html>