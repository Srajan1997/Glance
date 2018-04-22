<html>
<?php

$conn = mysqli_connect('localhost', 'blog', 'password', 'blogdatabase');
if($conn)
{
	$query = "SELECT * FROM blogtable ORDER BY userid DESC";
	$data = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($data))
	{
			echo "<h1>" . $row['blogtitle'] . "</h1><br><br>";
		echo "<h3>" . $row['username'] . "</h3><br><br>";
		echo "<p>" . $row['blogdata'] . "</p>";
		
	}
}
else echo "<b>Connection Error!</b>"
?>
</html>
