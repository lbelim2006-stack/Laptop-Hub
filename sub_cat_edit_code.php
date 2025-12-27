<?php 
include("connect.php");
$sub_cat_id=$_POST['sub_cat_id'];
$sub_cat_name=$_POST['sub_cat_name'];
$sub_cat_description=$_POST['sub_cat_description']; 
$cat_id=$_POST['cat_id'];

$sub_cat_photo="sub_cat_photo/".$_FILES['sub_cat_photo']['name'];
move_uploaded_file($_FILES['sub_cat_photo']['tmp_name'],$sub_cat_photo);


$q="UPDATE sub_category set sub_cat_name='$sub_cat_name',sub_cat_description='$sub_cat_description',sub_cat_photo='$sub_cat_photo',cat_id='$cat_id' WHERE sub_cat_id=$sub_cat_id";

//print $q;

$i=mysqli_query($con,$q);

if($i==1)
{
    
header("location:sub_cat_view.php");
}
else
{
	echo "not Updated...";
}
?>