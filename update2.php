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
<h1>Update Data</h1>
</p>
<p>
<!-- get passed databas -->
<?php
// set variables
$uid=$_POST["uid"];
$ufn=$_POST["ufn"]; 
$uln=$_POST["uln"];
$servername = "localhost:1111 ";
$username = "yourdb";
$password = "database";
$dbname = "name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}	// update data
$sql = "UPDATE MyGuests SET id='{$uid}', firstname ='{$ufn}', lastname='{$uln}' WHERE id='{$uid}'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();

?>
</p>
</body>
</html>