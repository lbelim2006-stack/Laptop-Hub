<?php
include("connect.php");
$prod_id=$_GET['prod_id'];

$q="DELETE FROM product_master_tbl WHERE prod_id=$prod_id";

$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:product_view.php");
}
else
{
	echo"record not inserted";
}