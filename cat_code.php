<?php 
include("connect.php");

$cat_name=$_POST['cat_name'];
$cat_description=$_POST['cat_description']; 

$cat_photo="cat_photo/".$_FILES['cat_photo']['name'];
move_uploaded_file($_FILES['cat_photo']['tmp_name'],$cat_photo);


$q="INSERT INTO category_tbl(cat_name,cat_description,cat_photo) VALUES ('$cat_name','$cat_description','$cat_photo')";

$i=mysqli_query($con,$q);
if($i==1)
{
header("location:cat_view.php");
}
else
{
	echo "record not inserted..";
}
?>