<!DOCTYPE html>
<html>
<head>
<script language="JavaScript">
//just for fun JavaScript :D 
var password;

var pass1="database";	//bad password
var pass2="1of2course3"; //better

password=prompt('Please enter your password to view this page!',' ');

if (password==pass1 || password==pass2)
alert('Password Correct! Click OK to enter!');
else
   {
    window.location="index.php";	//going back if entered fale pw
    }
</script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta charset="UTF-8">		
<title>enterfield</title>
</head>
<body>
<p>
<div class="menu">
<?php include 'header.php';?>
</div>
<br/>
<h1>Insert guest Data, into the enter field</h1>
</p>
<p>
<!-- HTML formular to pass data. Input for the average user -->
<form action="third.php" method="post">
firstname: <input type="text" name="firstname"><br>
lastname:  <input type="text" name="lastname"><br>
id:<input type="number" name="uid" class="small"><br>
<input type="submit">
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
$conn->close(); //Dont forget
?> 
</p>

</body>
</html>