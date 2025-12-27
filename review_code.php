<?php 
include("connect.php");

$prod_id=$_POST['prod_id'];
$review_mes=$_POST['review_mes'];
$review_date=date("d/m/Y");

$user_id=$_POST['user_id'];
 
$review_photo="review_photo/".$_FILES['review_photo']['name'];
move_uploaded_file($_FILES['review_photo']['tmp_name'],$review_photo);


$q="INSERT INTO review_master_tbl(prod_id,review_mes,review_date,user_id,review_photo) VALUES ($prod_id,'$review_mes','$review_date',$user_id,'$review_photo')";

print $q;

$i=mysqli_query($con,$q);
if($i==1)
{
     header("location:review_view.php");
}
else
{
	echo "record not inserted..";
}
?>