<!DOCTYPE html>
<html>
<head>
<script language="JavaScript">
var password;

var pass1="database";				
var pass2="1cogito2ergo3sum4";		//thats a nice pw

password=prompt('Please enter your password to view this page!',' ');

if (password==pass1 || password==pass2)
alert('Password Correct! Click OK to enter!');
else
   {
    window.location="index.php";
    }
</script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="UTF-8">		
<title>delete data</title>
</head>
<body>
<p>
<div class="menu">
<?php include 'header.php';?>
</div><br>
<h1>delete date</h1><br>
</p>
<p>
<!-- which row should be delete? -->
<form action="fifth.php" method="post">
which row do you want do delete?:
<input type="text" name="delete" class="small"><br>
<input type="submit">	<!-- pass input to fifth.php -->
</form>
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
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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