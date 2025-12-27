<?php
include("connect.php");
$sub_cat_id=$_GET['sub_cat_id'];

$q="DELETE FROM sub_category WHERE sub_cat_id=$sub_cat_id";

$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:sub_cat_view.php");
}
else
{
	echo"record not inserted";
}