<html>
<title>GLANCE > Create Blog</title>
<head>
	<link href="https://fonts.googleapis.com/css?family=Cormorant|Economica|Indie+Flower|Julius+Sans+One|Pacifico|Playfair+Display+SC|Quattrocento|Raleway|Shadows+Into+Light" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>


<style>
::-webkit-scrollbar {
    display: none;
}
body{}
*{font-family: "raleway";font-size: 22px; }
.but{display: inline-block;border-radius: 2px; border: 1px solid black; font-family: 'Playfair Display SC';color: black; padding: 5px 25px 8px 25px;font-size: 18px;background-color: transparent;}
.but:hover{background-color: black; transition-duration: 0.2s;color: white;border: 1px solid ;}
.f0{width: 60vw;}
#f4{height:30vh;}
.extra{color: white;}
.rollon{z-index: -99;position: fixed;width: 103vw; height: 103vh;background-image: url("backx.jpg");background-size: cover;background-repeat: no-repeat;}
.sp{width:32px;display: inline-block;}
</style>
<body>

<?php
$conn = mysqli_connect('localhost','id5487326_12344747','12344747','id5487326_blogdatabase');

if($conn)
{
if(isset($_POST["submit"]))
{
	
	$user = $_POST["USERNAME"];
	$title = $_POST["BLOGTITLE"];
	$data = $_POST["BLOGDATA"];
	$des = $_POST["BLOGDES"];
	$cat = $_POST["CAT"];
	$INSERT = "INSERT INTO blogtable (username, blogtitle, description, blogdata, Category) VALUES ('$user','$title', '$des', '$data', '$cat')";
	if(mysqli_query($conn, $INSERT)){
		echo "<script>alert('Congrats! Your Blog has been sucessfully created.');</script>";
	}
	else{
		echo "<script>alert('There was an error in creating your blog. Please try again!');</script>";
	}
	mysqli_close($conn);
	

}
}
?>

	<div class="rollon">
	</div>
	<center><br><h1 style="color: black">Create blog</h1>
	<a title="Home" href="home2x.php"><img src="ico1b.png" width="29px" height="auto" class="ico1"></a><div class="sp"></div> 
<a href="blogglance.php" title="Read Blogs"><img src="ico2b.png" width="32px" height="auto" class="ico2"></a> <div class="sp"></div> 
<a title="Write Blogs"><img src="ico3b.png" width="32px" height="auto" class="ico3"></a><BR><BR><BR><BR>
	<form action="<?php $_PHP_SELF ?>" method="POST">
	<input type="text"  class="f0" name="BLOGTITLE" placeholder="Title of your Blog" /><br><br><br>
	<input type="text" name="BLOGDES" class="f0" placeholder="Description of your Blog" /><br><br><br>
	<select class= "f0" name= "CAT">
			<Option Value="CATEGORY" class="extra">Category</Option>
<Option Value="CHEMISTRY">Chemistry</Option>
<Option Value="PHYSICS">Physics</Option>
<Option Value="MATHS">Mathematics</Option>
<Option Value="BIOLOGY">Biology</Option>
<Option Value="GEOGRAPHY">Geography</Option>
<Option Value="HISTORY">History</Option>
<Option Value="CIVICS">Civics</Option>
<Option Value="POLITICS">Politics</Option>
<Option Value="UNITED NATIONS">United Nations</Option>
<Option Value="WORLD LEADERS">World Leaders</Option>
<Option Value="CELEBRITIES">Celebrities</Option>
<Option Value="BOLLYWOOD">Bollywood</Option>
<Option Value="BOX OFFICE">Box Office</Option>
<Option Value="HOLLYWOOD">Hollywood</Option>
<Option Value="SONGS AND ACOUSTICS">Acoustics</Option>
<Option Value="SINGERS">Singers</Option>
<Option Value="MARKET">Market</Option>
<Option Value="ARMY">Army</Option>
<Option Value="NAVY">Navy</Option>
<Option Value="MILITARY">Military</Option>
<Option Value="AIR FORCE">Air Force</Option>
<Option Value="WEATHER">Weather</Option>
<Option Value="RESEARCH">Research</Option>
<Option Value="BAKERY">Bakery</Option>
<Option Value="FESTIVAL">Festival</Option>
<Option Value="SPORTS">Sports</Option>
<Option Value="DRAMA">Drama</Option>
<Option Value="KITCHEN">Kitchen</Option>
<Option Value="EVENTS">Events</Option>
<Option Value="ROCKBAND">Rockband</Option>
<Option Value="COLLEGE FEST">Collegefest</Option>
<Option Value="ART">Art</Option>
<Option Value="PAINTING">Painting</Option>
<Option Value="COLLEGE">College</Option>
<Option Value="EXAMS">Exams</Option>
<Option Value="GUITAR">Guitar</Option>
<Option Value="LIFESTYLE">Lifestyle</Option>
<Option Value="TRAVEL">Travel</Option>
<Option Value="OCEAN">Ocean</Option>
<Option Value="HILL">Hill</Option>
<Option Value="SKY">Sky</Option>
<Option Value="SUN">Sun</Option>
<Option Value="MOON">Moon</Option>
<Option Value="DAY">Day</Option>
<Option Value="NIGHT">Night</Option>
<Option Value="LABOR">Labor</Option>
<Option Value="ASTRONAUT">Astronaut</Option>
<Option Value="MOUNTAIN">Mountain</Option>
<Option Value="PLAINS">Plains</Option>
<Option Value="FISH">Fish</Option>
<Option Value="PETS">Pets</Option>
<Option Value="WILD">WildLife</Option>
<Option Value="BEVERAGES">Beverages</Option>
<Option Value="Cattle">Cattle</Option>
<Option Value="Bird">Bird</Option>
<Option Value="TOYS">Toys</Option>
<Option Value="TRADITION">Traditions</Option>
<Option Value="RAINBOW">Rainbow</Option>
<Option Value="JEWELLERY">Jewellery</Option>
<Option Value="GOLD">Gold</Option>
<Option Value="TEXTILE">Textile</Option>
<Option Value="INDUSTRY">Industry</Option>
<Option Value="START UP">Start Up</Option>
<Option Value="GAMING">Gaming</Option>
<Option Value="TABACCO">Tobacco</Option>
<Option Value="DISEASE">Disease</Option>
<Option Value="SADNESS">Sadness</Option>
<Option Value="PAIN">Pain</Option>
<Option Value="SUPERHEROES">Super Heroes</Option>
<Option Value="CHILDREN">Children</Option>
<Option Value="FAMILY">Family</Option>
<Option Value="PARENTS">Parents</Option>
<Option Value="SCHOOL">School</Option>
<Option Value="EDUCATION">Education</Option>
<Option Value="GADGETS">Gadgets</Option>
<Option Value="TECHNOLOGY">Technology</Option>
<Option Value="ROBOTICS">Robotics</Option>
<Option Value="FUTURE">Future</Option>
<Option Value="WEBSITES">Websites</Option>
<Option Value="SOCIAL NETWORKING">Social Networking</Option>
<Option Value="ADDICTION">Addiction</Option>
<Option Value="ALCOHOL">Alcohol</Option>
<Option Value="JUNK FOOD">Junk Food</Option>
<Option Value="BOOKS">Books</Option>
<Option Value="NOVELS">Novels</Option>
<Option Value="AUTHORS">Authors</Option>
<Option Value="DIETING">Dieting</Option>
<Option Value="EXERCISES">Exercises</Option>
<Option Value="POVERTY">Poverty</Option>
<Option Value="JEWELLERY">Royalty</Option>
<Option Value="DIETING">Supplements</Option>
<Option Value="WATCHES">Watches</Option>
<Option Value="APPS">Apps</Option>
<Option Value="STYLE UPDATE">Style Update</Option>
<Option Value="WEDDINGS">Weddings</Option>
<Option Value="HYGIENE">Hygiene</Option>
<Option Value="WOMEN">Women</Option>
<Option Value="CRIME">Crime</Option>
<Option Value="MOTHER">Mother</Option>
<Option Value="FATHER">Father</Option>
<Option Value="SISTERS">Sisters</Option>
<Option Value="BROTHERS">Brothers</Option>
<Option Value="CRICKET">Cricket</Option>
<Option Value="CARS">Motor</Option>
<Option Value="CARS">Cars</Option>
<Option Value="TERROR">Terror</Option>
<Option Value="CRICKET">Cricket</Option>
<Option Value="JOURNALISM"> JOURNALISM </Option>
<Option Value="SOCIAL NETWORKING">Youtube</Option>
<Option Value="SOCIAL NETWORKING">Facebook</Option>
<Option Value="SOCIAL NETWORKING">Twitter</Option></select><br><br><br>
<textarea id="BLOGDATA" class= "f0" name="BLOGDATA"></textarea><br><br><br>
		<input type="text" class= "f0" name="USERNAME" placeholder="Author's Sign" /><br><br><br>
</select><br>
		<center style="font-size: 18px; color: black;">By clicking on SUBMIT, you agree to our <a target="_blank" href="GLANCE Terms and Conditions.pdf" style= "color:lightgrey;text-decoration: none;font-size: 18px;"> Terms and Conditions</center><br><br><br>
		<center><button type="submit" name="submit" id="submit" class="but">Submit</button></center><br>
		
	</form>
</div>
	</body>
	</html>
