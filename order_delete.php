<?php
include("connect.php");
$order_id=$_GET['order_id'];

$q="DELETE FROM order_master_tbl WHERE order_id=$order_id";

$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:order_view.php");
}
else
{
	echo"record not inserted";
}