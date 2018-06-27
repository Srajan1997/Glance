<html>
<style type="text/css">
input{width:30vw;height:28px;}
select{width:30vw;height:16px;}
	body{background-image: url("frame.jpg"); background-size: cover;font-family: "ubuntu"}
}
}
#but{display: inline-block;height: 40px;width: 120px;background-color: blue;color: white; border-radius: 2px;border-color: blue;}
*{text-decoration: bold;}
</style>
<body>
<center>
	<br><br>
<h1><b>snatch</b></h1>
<h3><b>Database Access</b></h3>

<br><br>
<?php
$conn = mysqli_connect("localhost","root","","snatch");
if(!$conn)
{
echo "connection_aborted";
}

if($conn)
{
			if(isset($_POST['submit']))
			{

				$name = $_POST['name'];
$description = $_POST['description'];
$brand = $_POST['brand'];
$releasedate = $_POST['releasedate'];
$sp = $_POST['sp'];
$cp = $_POST['cp'];
$size1 = $_POST['size1'];
$size2 = $_POST['size2'];
$size3 = $_POST['size3'];
$exclusive = $_POST['exclusive'];
$category = $_POST['category'];
$upload1 = $_POST['upload1'];
$upload2 = $_POST['upload2'];
$upload3 = $_POST['upload3'];
$tag = ($cp/$sp)*100;


	$insert = "INSERT INTO maintable (name, description, brand, releasedate, sp, cp, size1, size2, size3, exclusive, category, upload1, upload2, upload3, tag) VALUES ('$name', '$description', '$brand', '$releasedate', '$sp', '$cp', '$size1', '$size2', '$size3', '$exclusive', '$category', '$upload1', '$upload2', '$upload3', '$tag')";
	if(mysqli_query($conn,$insert)){
		echo "<script>alert('Data Uploaded Successfully!')</script>";
		}
		else {
			echo "<script>alert('There was some problem. Try removing invalid special symbols.')</script>";
		}
		mysqli_close($conn);
	}
}
?>

<div class="info">
	<form action="<?php $_PHP_SELF ?>" method="POST">
	Category<br><br><select name="category" style="height: 28px;text-align: center;">
			 <option value="Select" style="color:lightgrey"> Select</option><center>
		 <option value="sports"> Sports</option>

   <option value="fashion"> Fashion</option>
   	 <option value="stationary"> Stationary</option>

  <option value="electronics"> Electronics</option>
     <option value="home"> Home Decor</option> 
  <option value="grocery"> Grocery</option> 
</center>
</select>	<br><br>
Product Name<br><br><input type="text" name="name" placeholder="Product Name"><br><br>
	Brand Name<br><br><input type="text" name="brand" placeholder="Brand Name"><br><br>
Site Price<br><br><input id="sell" type="text" name="sp" placeholder="Snatch Price"><br><br>
Original Cost<br><br><input id="cost" type="text" name="cp" placeholder="Cost Price"><br><br>
Description<br><br><input type="text" name="description" placeholder="Description"><br><br>
Release Date<br><br><input type="text" name="releasedate" placeholder="Release Date" required minlength="6" maxlength="6"><br><br>
Gender<br><br><select name="gender" style="height: 28px;text-align: center;">
			 <option value="Select" style="color:lightgrey"> Select</option><center>
		 <option value="male">Male</option>

   <option value="female"> Female</option>
      <option value="unisex"> Unisex</option>
</select><br><br>
   Exclusivity<br><br>	 <select name="exclusive" style="height: 28px;text-align: center;">
			 <option value="Select" style="color:lightgrey"> Select</option><center>
		 <option value="yes">Snatch Exclusive</option>

   <option value="no"> No</option>
   	</select>
<br>
<br>Sizes<br><br>
<select name="size1" style="height: 28px;text-align: center;">
			 <option value="Select" style="color:lightgrey"> SIZE 1</option><center>
		 <option value="XS">XS (Extra Small)</option>

   <option value="S"> S (Small)</option>
   	 <option value="M"> M (Medium)</option>

  <option value="L"> L (Large)</option>
     <option value="XL"> XL (Extra Large)</option> 
  <option value="XXL"> XXL (Extra Extra Large)</option> 
 <option value="US7"> US 7 / UK 6</option>
 <option value="US8"> US 8 / UK 7</option>
  <option value="US9"> US 9 / UK 8</option>
 <option value="US10"> US 10 / UK 9</option>
 <option value="US11"> US 11 / UK 10</option>
 <option value="US12"> US 12 / UK 11</option>
</center>
</select><br><br>
<select name="size2" style="height: 28px;text-align: center;">
			 <option value="Select" style="color:lightgrey"> SIZE 2</option><center>
		 <option value="XS">XS (Extra Small)</option>

   <option value="S"> S (Small)</option>
   	 <option value="M"> M (Medium)</option>

  <option value="L"> L (Large)</option>
     <option value="XL"> XL (Extra Large)</option> 
  <option value="XXL"> XXL (Extra Extra Large)</option> 
 <option value="US7"> US 7 / UK 6</option>
 <option value="US8"> US 8 / UK 7</option>
  <option value="US9"> US 9 / UK 8</option>
 <option value="US10"> US 10 / UK 9</option>
 <option value="US11"> US 11 / UK 10</option>
 <option value="US12"> US 12 / UK 11</option>
</center>
</select><br><br><select name="size3" style="height: 28px;text-align: center;">
		<option value="Select" style="color:lightgrey">  SIZE 3</option><center>
		 <option value="XS">XS (Extra Small)</option>

   <option value="S"> S (Small)</option>
   	 <option value="M"> M (Medium)</option>

  <option value="L"> L (Large)</option>
     <option value="XL"> XL (Extra Large)</option> 
  <option value="XXL"> XXL (Extra Extra Large)</option> 
 <option value="US7"> US 7 / UK 6</option>
 <option value="US8"> US 8 / UK 7</option>
  <option value="US9"> US 9 / UK 8</option>
 <option value="US10"> US 10 / UK 9</option>
 <option value="US11"> US 11 / UK 10</option>
 <option value="US12"> US 12 / UK 11</option>
</center>
</select>
<br><br><br><br>
	Product Image <br><br><input type="text" name="upload1" placeholder="URL Product Image 1"><br><br>
	<input type="text" name="upload2" placeholder="URL Product Image 2"><br><br>
	<input type="text" name="upload3" placeholder="URL Product Image 3"><br><br><br>
<center><input type="submit" name="submit"></center>
	</form>

<br><br><br><br>


</center>
</div>
</body>

</html>