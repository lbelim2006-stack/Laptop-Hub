<?php
include("connect.php");
$review_id=$_GET['review_id'];

$q="delete from review_master_tbl where review_id=$review_id";
$i=mysqli_query($con,$q);
if($i==1)
{
	header("location:review_view.php");
}
else
{
	echo"record not inserted";
}