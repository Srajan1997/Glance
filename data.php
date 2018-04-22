<html>
<?php

$conn=mysqli_connect('localhost','root','','scratch');
if(!$conn){
echo '<center><h1 class="noconn">Sorry! Could not connect to database!</h1></center>';
}
else{
echo '<center><h1 class="yesconn">Congrats! You have been connected to the database!</h1></center>';
}
$query = "SELECT * FROM login ORDER BY id DESC";
$data = mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($data))
{
	echo "<table><tr><td>".$row['phone']."</td><td>".$row['sex']."</td><td>".$row['id']."</td></tr></table>";
}
?>
<style type="text/css">
	.noconn{ color:red;}
	.yesconn{color:green;}
	*{font-family: 'ubuntu';}
.tabledata{color:grey;}
</style>
</html>