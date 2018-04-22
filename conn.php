<html>
<?php
if(isset($_POST['submit'])){
$host ='localhost';
$user =$_POST["userid"];
$pass=$_POST["pass"];
$dbc=mysqli_connect($host, $user, $pass);

if($dbc)
{
	  print '<br><br><center><h1 style="color:green;">Connected!</h1></center>';
}
else print '<br><br><center><h1 style="color: red;">Not Connected!</h1></center>';
}
?>

<body>
	<center><h1>Database Login</h1>
<br>
<br>
<br>
<br>
<form action="<?php $_PHP_SELF ?>" method="POST">
User ID:	<input type="text" name="userid"/><br><br>
Password:	<input type="password" name="pass"/><br><br>
<input type="submit" name="submit"/><br><br>
</form>
</center>
</body>
</html>