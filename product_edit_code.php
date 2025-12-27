<?php 
include("connect.php");
$prod_id=$_POST['prod_id'];
$prod_name=$_POST['prod_name'];
$prod_description=$_POST['prod_description']; 
$prod_price=$_POST['prod_price'];
$cat_id=$_POST['cat_id'];
$sub_cat_id=$_POST['sub_cat_id'];
$brand_id=$_POST['brand_id'];

$prod_photo="prod_photo/".$_FILES['prod_photo']['name'];
move_uploaded_file($_FILES['prod_photo']['tmp_name'],$prod_photo);


$q="update product_master_tbl set prod_name='$prod_name',prod_description='$prod_description', prod_price='$prod_price',prod_photo='$prod_photo',cat_id='$cat_id',sub_cat_id='$sub_cat_id',brand_id='$brand_id' where prod_id=$prod_id";

$i=mysqli_query($con,$q);

if($i==1)
{

header("location:product_view.php");
}
else
{
	echo "not Updated...";
}
?>