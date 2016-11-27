<!DOCTYPE html>
<html>
<head>
<title>Assignment 8</title>
</head>
<body>

<h2>Add Album</h2>

<form action="view.php" method = "POST">
	Album Name:<br/>
	<input type = "text" name = "albumname"/><br/>
	Artist:<br/>
	<input type = "text" name = "artist"/><br/>
	Number of Tracks:<br/>
	<input type = "text" name = "tracks"/><br/>
	Genre:<br/>
	<input type = "text" name = "genre"/><br/><br/>
    <input type="submit" value="Add Album" name = "addalbum"/>
</form>
<br>

<form action="view.php">
    <input type="submit" value="Cancel" />
</form>

</body>
</html>