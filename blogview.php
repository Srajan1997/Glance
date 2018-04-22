<html>

<?php
$id = $_GET['userid'];
$conn = mysqli_connect('localhost','id5487326_12344747','12344747','id5487326_blogdatabase');
if($conn)
{
$query = "SELECT * FROM blogtable WHERE userid = '$id'";
$data = mysqli_query($conn, $query); 
$row = mysqli_fetch_assoc($data);
}
?>
<head>
	<link href="https://fonts.googleapis.com/css?family=Cormorant|Economica|Indie+Flower|Julius+Sans+One|Pacifico|Playfair+Display+SC|Quattrocento|Raleway|Shadows+Into+Light" rel="stylesheet">
	<style>
	.title{display: inline-block;padding:50px;padding-top: 10vh;}
		.author{display: inline-block;padding-left: 50px;}
::-webkit-scrollbar {
    display: none;
}
	*{font-family: "Raleway";}
	.banner{width: 103vw; height: 70vh; background-image: url(<?php
              $cat = $row['Category'];
              echo '"'. $cat . '.jpg"';
			?>);background-size: cover;color:white;margin-top: -20px; margin-left: -50px;box-shadow: 5px 10px 8px #888888;}
	.banner:hover{height:75vh;transition-duration: 1s;opacity: 0.8;}
		.banner:not( :hover ){height:70vh;transition-duration: 1s;opacity: 1; transition-duration: 1s;}
	.text{display: inline-block;margin:150px;text-align: justify;line-height: 40px;}
	.description{margin-top: -50px;}
.but{display: inline-block;border-radius: 2px; border: 1px solid black; font-family: 'Playfair Display SC';color: black; padding: 0px 25px 0px 25px;font-size: 18px;background-color: transparent;}
.but:hover{background-color: black; transition-duration: 0.2s;color: white;border: 1px solid ;}
</style>
</head>
<TITLE>GLANCE > <?php
              echo $row['blogtitle'];
			?></TITLE>
<body>
	<div class="banner">
		<center>
		<div class="label">
		<div class="title" style="font-size: 64px">
			<br><?php
              echo $row['blogtitle'];
			?>
		</div><br>
		<div class="author" style="font-size: 24px; color: lightgrey;">
			by <b><?php
              echo $row['username'];
			?></b></div></div></center>
		</div>
	<div class="text">
		<div class="description" style="font-size: 24px; color: grey;"><i>
			<b><?php
              echo $row['description'];
			?>
		</i></b></div><br><br><br><div class="content">
		<?php
              echo $row['blogdata'];
			?>
	</div>
	<br>	<br>	<br>
	<center><a href="blogglance.php"><div class= "but">BACK TO BLOGS</div></a></center>
</body>