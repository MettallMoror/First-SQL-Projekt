<head>
<script language="JavaScript">	
/*var password;

var pass1="database";
var pass2="1adg2xvn3";
<--
password=prompt('Please enter your password to view this page!',' ');
-->
if (password==pass1 || password==pass2)
alert('Password Correct! Click OK to enter!');
else
   {
    window.location="index.php";
    }*/
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
<h1>delete successfull?</h1>
</p>
<p>
<?php
//get passed data from fourth.php
$d=$_POST["delete"];
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

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id='$d'";
// check success
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?> 
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