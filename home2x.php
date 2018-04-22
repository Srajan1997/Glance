<html>
<TITLE>GLANCE > Home</TITLE>
<?php
$conn = mysqli_connect('localhost','id5487326_12344747','12344747','id5487326_blogdatabase');
if($conn)
{
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$loginid=$_POST["loginid"];
		$insert = "INSERT INTO signdata (name, loginid) VALUES ('$name', '$loginid')";
		mysqli_query($conn, $insert);
		mysqli_close($conn);
		header("Location: login.php");
	}
}
?>
<head>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant|Economica|Indie+Flower|Julius+Sans+One|Pacifico|Playfair+Display+SC|Quattrocento|Raleway|Shadows+Into+Light" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
     window.onscroll = function() {scrollFunction()};
     function scrollFunction() {
         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
             document.getElementById("myBtn").style.display = "block";
         } else {
             document.getElementById("myBtn").style.display = "none";
         }
     }
     function topFunction() {
         document.body.scrollTop = 0;
         document.documentElement.scrollTop = 0;
     }
     </script>
</head>
<style type="text/css">

::-webkit-scrollbar {
    display: none;
}

     ::-webkit-scrollbar {
    display: none;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: transparent;
}
a{z-index: +3;}

.up:hover {
 width: 35; height: auto; transition-duration: 0.3s;cursor: pointer;
}
#row1{background-image: url('blog1.jpg');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#row2{background-image: url('blog2.jpg');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#row3{background-image: url('blog3.jpg');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#row4{background-image: url('mesh.png');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#sec0{background-color: black;opacity: 0.6;position: fixed;height:103vh;}
#sec1{background-color: transparent;}
#sec0p1{font-family: "Playfair Display SC";font-size: 96px;color: darkgrey;}
#sec1{font-family: "Raleway";color: white;font-size: 96px;position: relative;left:40vw;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec3{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:20vw;display: inline-block;width: 30vw;height: 50vh;t}
#sec4{font-family: "Raleway";color: white;font-size: 96px;position: relative;left:40vw;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec5{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec4{font-family: "Raleway";color: white;font-size: 96px;position: relative;left:40vw;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec5{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec7{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:10vw;display: inline-block;width: 30vw;height: 50vh;}
.but{display: inline-block;border-radius: 2px; border: 1px solid white; font-family: 'Playfair Display SC';color: white; padding: 5px 25px 8px 25px;margin-top:120px;font-size: 18px;background-color: transparent;position: relative;top:-55px;  cursor: pointer;}
.but:hover{background-color: black; transition-duration: 0.2s;color: white;border: 1px solid black;}
.scroll{position: relative;top:80vh;left:10vw;}
.ico1{position: relative;left: 13vw;display: inline-block;  cursor: pointer;}
.ico2{display: inline-block;position: relative;left: 16vw;  cursor: pointer;}
.ico3{display: inline-block;position: relative;left: 19vw;  cursor: pointer;}
#sec7p1{font-size:20px;}
.signup{width:35vw;}
</style>

<body>

	<div id="row1" class="row">
		<button onclick="topFunction()" id="myBtn" title="Go to top"><img class="up" src="up.png" width="32px" height="auto"></button>
			<div id="mybtn"><img src="up.png" width="32px" height="auto"></div>
	<div id="sec0" class="col-xs-12 col-lg-5 col-md-5">
<div id="sec0p1"><br><br><center>Glance</center></div>
<a title="Home"><img src="ico2.png" width="29px" height="auto" class="ico1" ></a> 
<a title="Read Blogs" href="blogglance.php"><img src="ico3.png" width="32px" height="auto" class="ico2"></a> 
<a title="Write Blogs" href="feedform2.php"><img src="ico1.png" width="32px" height="auto" class="ico3"></a> 
	</div>
	<div id="sec1" class="col-xs-12 col-lg-7 col-md-7">
		<center>For the fun called Writing</center>	</div><center><img width="40px" height="auto" class="scroll" src="scroll.gif"></center>

</div>
<div id="row2" class="row">
	<div id="sec2" class="offset col-lg-5 col-md-5">

	</div>
	<div id="sec3" class="col-xs-12 col-lg-7 col-md-7">
		<center>For the habit</center><center> called Creativity</center>	</div>
</div>
<div id="row3" class="row">
	<div id="sec4" class="offset col-lg-5 col-md-5">

	</div>
	<div id="sec5" class="col-xs-12 col-lg-7 col-md-7">
		<center>For the talent</center><center> called Storytelling</center>	</div>
</div>
<div id="row4" class="row">
	<div id="sec6" class="offset col-lg-5 col-md-5">

	</div>
	<div id="sec7" class="col-xs-12 col-lg-7 col-md-7">
		<center>Subscribe</center>
		<center><div id="sec7p1"><br><form action="<?php $_PHP_SELF ?>" method="POST"><br><br>
			<input class="signup" type="text" name="name" placeholder=" Your Name"><br><br><br>
				<input class="signup" type="text" name="loginid" placeholder="Your Mailing Address"><br><br><br><br>
				<center style="font-size: 18px; color: white;">You will receive our annual News-Letter.</center>
					<center><a href="login.php"><input type="submit" name="submit" class="but"/></a></center>
					<center style="font-size: 18px; color: black;">By clicking on SUBMIT, you agree to our <a href="login.php" style= "color:white;"> Terms and Conditions</center>
		</form></div></center>

</div>
</body>

</html>