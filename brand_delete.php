<?php
include("connect.php");
$brand_id=$_GET['brand_id'];

$q="DELETE FROM brand_tbl WHERE brand_id=$brand_id";

$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:beand_view.php");
}
else
{
	echo"record not inserted";
}