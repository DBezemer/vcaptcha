<html>
<head>
<link href="jquery.dataTables.min.css" rel="stylesheet"> 
<script src="jquery.js"></script>
<script src="jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#backend').dataTable();
} );
</script>
</head>
<body>


<?php
$con=mysqli_connect("localhost","vcaptcha","pw4vcaptcha","vcaptcha");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM vcaptcha");

echo "<table border='1' id='backend'>
<thead>
<tr>
<th>id</th>
<th>entry</th>
<th>start time</th>
<th>duration</th>
<th>transcript</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['entryid'] . "</td>";
  echo "<td>" . $row['starttime'] . "</td>";
  echo "<td>" . $row['duration'] . "</td>";
  echo "<td>" . $row['transcript'] . "</td>";
  echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
</body>
</html>