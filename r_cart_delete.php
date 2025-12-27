<?php
include("r_header.php");
include("connect.php");
$cart_id=$_GET['cart_id'];

$q="DELETE FROM cart_master_tbl WHERE cart_id=$cart_id";

$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:r_cart_view.php");
}
else
{
	echo"record not inserted";
}