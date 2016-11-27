<?php
include("dbConnect.php");

if(isset($_POST['createtables'])){
	include("createTables.php");
}

if(isset($_POST['addalbum'])){
	if (!mysqli_query($conn, "INSERT INTO `albums` (`albumName`, `artist`, `numOfTracks`, `genre`) VALUES ('$_POST[albumname]', '$_POST[artist]', '$_POST[tracks]', '$_POST[genre]')")){
		echo("Could not add album: " . mysqli_error($conn));
	}
}

if(isset($_POST['addartist'])){
	if (!mysqli_query($conn, "INSERT INTO `fwong1`.`artists` (`artistName`, `numOfMembers`) VALUES ('$_POST[artistname]', '$_POST[numOfMembers]')")){
		echo("Could not add artist: " . mysqli_error($conn));
	}
}


$resultAlbums = mysqli_query($conn,"SELECT * FROM albums");
$resultArtists = mysqli_query($conn,"SELECT * FROM artists");

?>


<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
tr, td, table, th{
	border: 1px solid black;
	border-collapse: collapse;
}

</style>
</head>
<body>

	<table>
		<thead>
		  <tr>
			<th>Album ID</th>
			<th>Album Name</th>
			<th>Artist</th>
			<th>Number of Tracks</th>
			<th>Number of Tracks</th>

		  </tr>
		</thead>

		<tbody>

		<?php
		
		while($row = $resultAlbums->fetch_assoc()){
			echo 
				'<tr>
					<td>'.$row['album_id'].'</td>
					<td>'.$row['albumName'].'</td>
					<td>'.$row['artist'].'</td>
					<td>'.$row['numOfTracks'].'</td>
					<td>'.$row['genre'].'</td>
				</tr>';
		}

		?>

		</tbody>
	</table>
	<br>
	<table>
	<thead>
		<tr>
			<th>Artist ID</th>
			<th>Artist Name</th>
			<th>Number of Members</th>

		</tr>
	</thead>

	<tbody>
	<?php
	
	while($row = $resultArtists->fetch_assoc()){
		echo 
			'<tr>
				<td>'.$row['artist_id'].'</td>
				<td>'.$row['artistName'].'</td>
				<td>'.$row['numOfMembers'].'</td>
			</tr>';
		
	}
	mysqli_close($conn);
	?>
	</tbody>
	
	</table>
	
	
<br>
<form action="addAlbum.php">
    <input type="submit" value="Add Album" />
</form>
<br>
<form action="addArtist.php">
	<input type="submit" value="Add Artist" />
</form>

</body>
</html>
  