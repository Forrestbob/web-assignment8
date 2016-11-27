<!DOCTYPE html>
<html>
<head>
<title>Assignment 8</title>
</head>
<body>

<h2>Add Artist</h2>

<form action="view.php" method = "POST">
	Artist Name:<br/>
	<input type = "text" name = "artistname"/><br/>
	Number of Members:</br>
	<input type = "number" name = "numOfMembers"/><br/><br/>
    <input type="submit" value="Add Artist" name = "addartist"/>
</form>
<br>

<form action="view.php">
    <input type="submit" value="Cancel" />
</form>

</body>
</html>