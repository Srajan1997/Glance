<html>
<TITLE>GLANCE > Blogs</TITLE>
<head>
<link href="https://fonts.googleapis.com/css?family=Cormorant|Economica|Indie+Flower|Julius+Sans+One|Pacifico|Playfair+Display+SC|Quattrocento|Raleway|Shadows+Into+Light" rel="stylesheet">
</head>
<BR><center><h1>GLANCE</h1>
<a href="home2x.php" title="Read Blogs"><img src="ico1b.png" width="29px" height="auto" class="ico1"></a><div class="sp"></div> 
<a  title="Read Blogs"><img src="ico2b.png" width="32px" height="auto" class="ico2"></a> <div class="sp"></div> 
<a href="feedform2.php" title="Write Blogs"><img src="ico3b.png" width="32px" height="auto" class="ico3"></a><BR><BR><BR><BR> </center>
<?php

$conn = mysqli_connect('localhost','id5487326_12344747','12344747','id5487326_blogdatabase');
if($conn)
{
	$query = "SELECT * FROM blogtable ORDER BY userid DESC";
	$data = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($data))
	{
		echo '<center><div class="glance" style="background-image: url(\'' . $row['Category'] . '.jpg\')">';
			echo '<div class="title">' . $row['blogtitle'] . '</div>';
		echo '  <div class="author">by ' . $row['username'] . '</div><img src="line.png"><br>';
		echo "<p>" . $row['description'] . "</p>";
		echo '<br><br><a href="blogview.php?userid=' . $row['userid'] . '"><div class="but">Read</div></a></div></center><br><br>';
	}
}
else echo "<b>Connection Error!</b>"
?>

<style>
::-webkit-scrollbar {
    display: none;
}
h1{font-family: 'Playfair Display SC'; color: black; font-size: 96px;}
.title{ font-family: 'Playfair Display SC', serif; font-size: 32; color:white; }
.author{font-family: 'Economica', cursive; font-size: 18; color: grey;}
p{font-family: 'raleway'; color: white;}
.glance{display: inline-block;background-color: white; box-shadow: 5px 10px 8px #888888;padding: 20px; width: 87vw;height: 35vh;padding-top: 15vh; background-image: url();background-size: cover;background-repeat: no-repeat;transition-duration: 0.7s;}
.glance:hover{width: 90vw;height: 37vh;box-shadow: 5px 10px 8px #404040;}
.but{display: inline-block;border-radius: 2px; border: 1px solid white; font-family: 'Playfair Display SC';color: white; padding: 5px 25px 8px 25px;}
.but:hover{background-color: orange; transition-duration: 1s;color: white;border: 1px solid orange;}
.sp{width:32px;display: inline-block;}
</style>

</html>
