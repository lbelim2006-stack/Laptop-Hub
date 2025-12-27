<?php
include("connect.php");
$order_id=$_GET['cat_id'];

$q="DELETE FROM category_tbl WHERE cat_id=$cat_id";

$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:cat_view.php");
}
else
{
	echo"record not inserted";
}