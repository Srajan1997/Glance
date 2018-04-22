<?php
session_start();

$conn = mysqli_connect('localhost','blog','password','blogdatabase');
if($conn)
{
	if(isset($_POST["submit"]))
	{
    $log = $_POST['loginid'];
    $pass = $_POST['password'];
	$query = "SELECT * FROM signdata WHERE loginid = '$log' AND password = '$pass'";
  $data=mysqli_query($conn, $query);
	$row = musqli_fetch_assoc($data);
  $_SESSION['username'] = $row['loginid'];
	mysqli_close($conn);
  header('location: blogglance.php');
	}
}
?>
<html>
<TITLE>GLANCE > Thankyou! </TITLE>
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
*{overflow-y: hidde;}
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

.up:hover {
 width: 35; height: auto; transition-duration: 0.3s;cursor: pointer;
}
#row1{background-image: url('mesh.png');height: 104vh;background-size: cover;background-repeat: no-repeat;}
#row2{background-image: url('blog2.jpg');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#row3{background-image: url('blog3.jpg');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#row4{background-image: url('mesh.png');height: 120vh;background-size: cover;background-repeat: no-repeat;}
#sec0{background-color: black;opacity: 0.6;position: fixed;height:103vh;}
#sec1{background-color: transparent;}
#sec0p1{font-family: "Playfair Display SC";font-size: 96px;color: darkgrey;}
#sec1{font-family: "Raleway";color: white;font-size: 96px;position: relative;left:40vw;top:5vw;display: inline-block;width: 30vw;height: 50vh;}
#sec3{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:20vw;display: inline-block;width: 30vw;height: 50vh;t}
#sec4{font-family: "Raleway";color: white;font-size: 96px;position: relative;left:40vw;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec5{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec4{font-family: "Raleway";color: white;font-size: 96px;position: relative;left:40vw;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec5{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:20vw;display: inline-block;width: 30vw;height: 50vh;}
#sec7{font-family: "Raleway";color: white;font-size: 96px;position: relative;top:3vw;display: inline-block;width: 30vw;height: 50vh;display: inline-block;margin-left: 42vw;}
.but{display: inline-block;border-radius: 2px; border: 1px solid white; font-family: 'Playfair Display SC';color: white; padding: 5px 25px 8px 25px;font-size: 18px;background-color: transparent;position: relative;top:-55px;  cursor: pointer;}
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
		
			<div id="mybtn"><img src="up.png" width="32px" height="auto"></div>
	<div id="sec0" class="col-xs-12 col-lg-5 col-md-5">
<div id="sec0p1"><br><br><center>Glance</center></div>
<a title="Home" href="home2x.php"><img src="ico2.png" width="29px" height="auto" class="ico1"></a> 
<a title="Read Blogs" href="blogglance.php"><img src="ico3.png" width="32px" height="auto" class="ico2"></a> 
<a title="Write Blogs" href="feedform2.php"><img src="ico1.png" width="32px" height="auto" class="ico3"></a> 
	</div>


	<div id="sec7" class="col-xs-12 col-lg-7 col-md-7">
	<br>	<center>You're<br> Awesome!</center>
	<br>
					<center style="font-size: 24px; color: black;">Thankyou for Subscribing to our NewsLetter!</center>
		</form></div></center>

</div>
</body>

</html>