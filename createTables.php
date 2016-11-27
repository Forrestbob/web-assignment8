<?php

$createAlbumsTable = "
	CREATE TABLE albums (
		album_id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
		albumName varchar(255),
		artist varchar(255),
		numOfTracks varchar(255),
		genre varchar(255)
	
	)";

$createArtistsTable = "
	CREATE TABLE artists (
		artist_id integer NOT NULL PRIMARY KEY AUTO_INCREMENT,
		artistName varchar(255),
		numOfMembers varchar(255)
	
	)";

if (!mysqli_query($conn, $createAlbumsTable/* . $createArtistsTable*/)){
	echo("Could not create albums table: " . mysqli_error($conn));
}
if (!mysqli_query($conn, $createArtistsTable/* . $createArtistsTable*/)){
	echo("<br>Could not create artists table: " . mysqli_error($conn));
}
	
?>