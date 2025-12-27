<?php 
include("connect.php");
$brand_id=$_POST['brand_id'];
$brand_name=$_POST['brand_name'];
$brand_description=$_POST['brand_description']; 

$brand_logo="brand_logo/".$_FILES['brand_logo']['name'];
move_uploaded_file($_FILES['brand_logo']['tmp_name'],$brand_logo);


$q="update brand_tbl set brand_name='$brand_name',brand_description='$brand_description',brand_logo='$brand_logo' where brand_id=$brand_id";

$i=mysqli_query($con,$q);

if($i==1)
{

header("location:brand_view.php");
}
else
{
	echo "not Updated...";
}
?>