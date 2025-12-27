<?php 
include("connect.php");
$sub_cat_name=$_POST['sub_cat_name'];
$sub_cat_description=$_POST['sub_cat_description']; 

$sub_cat_photo="sub_cat_photo/".$_FILES['sub_cat_photo']['name'];
move_uploaded_file($_FILES['sub_cat_photo']['tmp_name'],$sub_cat_photo);
$cat_id=$_POST['cat_id'];

$q="INSERT INTO sub_category(sub_cat_name,sub_cat_description,sub_cat_photo,cat_id)VALUES('$sub_cat_name','$sub_cat_description','$sub_cat_photo',$cat_id)";

$i=mysqli_query($con,$q);
if($i==1)
{

header("location:sub_cat_view.php");
}
else
{
	echo "record not inserted..";
}
?>