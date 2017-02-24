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
<!-- HTML modify data -->
<form action="update2.php" method="post">
id:<input type="number" name="uid" class="small">
firstname:<input type="text" name="ufn" class="padd">
lastname:<input type="text" name="uln" class="padd">
<input type="submit"></form>
</p>
<p>
<?php
// OR select 
$servername = "localhost:1111 ";
$username = "yourdb";
$password = "database";
$dbname = "name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Select Data
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
</body>
</html>