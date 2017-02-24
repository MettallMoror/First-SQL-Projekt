<!DOCTYPE html>
<html>
<head>
<script language="JavaScript">
/*var password;

var pass1="database";
var pass2="lul";

password=prompt('Please enter your password to view this page!',' ');

if (password==pass1 || password==pass2)
alert('Password Correct! Click OK to enter!');
else
   {
    window.location="index.php";
    }*/
</script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="UTF-8">		
<title>Notification</title>
</head>
<body>
<p>
<div class="menu">
<?php include 'header.php';?>
</div><br/>
<h1>Faile or success?</h1>
</p>
<p>
<?php
//get the passed data from last page
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$uid=$_POST["uid"];

//set variables
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
//add passed data into database
$sql = "INSERT INTO MyGuests (firstname, lastname, id)
VALUES ('$firstname', '$lastname', '$uid')";
//check if success
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "better update data, if it is already available";
}

$conn->close();
?> 
</p>
</body>
</html>