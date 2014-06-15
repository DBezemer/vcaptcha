<?php
$entryid = $_GET["entryid"];
$starttime = intval($_GET["starttime"]);
$duration = intval($_GET["duration"]);
$transcript = $_GET["transcript"];

$conn=mysqli_connect("localhost","vcaptcha","pw4vcaptcha","vcaptcha");

if(mysqli_connect_errno()){
	echo "Error".mysqli_connect_error();
} else {
	mysqli_query($conn,"INSERT INTO vcaptcha (`entryid`,`starttime`,`duration`,`transcript`) VALUES ('$entryid', $starttime, $duration, '$transcript')") or die(mysqli_error($conn));
	$result = mysqli_query ($conn, "SELECT * FROM vcaptcha");
	while($row = mysqli_fetch_array ($result)){
		echo $row['table field name']; /* print field data */ 
	}
}

header("Location: referpage.html");
die();

?>