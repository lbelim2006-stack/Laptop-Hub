<?php 
include("connect.php");
$brand_name=$_POST['brand_name'];
$brand_description=$_POST['brand_description']; 

$brand_logo="brand_logo/".$_FILES['brand_logo']['name'];
move_uploaded_file($_FILES['brand_logo']['tmp_name'],$brand_logo);


$q="INSERT INTO brand_tbl(brand_name,brand_description,brand_logo) VALUES ('$brand_name','$brand_description','$brand_logo')";

$i=mysqli_query($con,$q);
if($i==1)
{

echo "record inserted..";
}
else
{
	echo "record not inserted..";
}
?>