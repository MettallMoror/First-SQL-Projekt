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
<!-- Select Dat and pass with HTML  -->
<form action="filtering2.php" method="post">
id <input type="number" name="numid" class="small"><br>
<input type="submit"></form>
</p>
<p>
<form action="filtering2.php" method="post">
firstname <input type="text" name="firstn"><br>
<input type="submit"></form>
</p>
<p>
<form action="filtering2.php" method="post">
lastname <input type="text" name="lastn"><br>
<input type="submit"></form>
</p>

</body>
</html>