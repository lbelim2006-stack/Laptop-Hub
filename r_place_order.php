<?php
include("r_header.php");
include("connect.php");
$user_id=$_GET['user_id'];
$order_date=date("d/m/Y");
$q11="select *from cart_master_tbl where user_id=$user_id";
$res11=mysqli_query($con,$q11);
if($row11=mysqli_fetch_row($res11))
{
	$q="INSERT INTO order_master_tbl(user_id,prod_id,prod_qty,prod_price,total_price)select user_id,prod_id,prod_qty,prod_price,total_price from cart_master_tbl where  user_id=$user_id";

print $q;

$i=mysqli_query($con,$q);

$q1="update order_master_tbl set order_date='$order_date' where user_id=$user_id";
$i1=mysqli_query($con,$q1);

$q2="delete from cart_master_tbl where user_id=$user_id";
$i2=mysqli_query($con,$q2);

if($i==1&&$i1==1&&$i2==1)
{
	 print "<script>";
     print "alert('Thank You Form Shopping');";
     print "window.location.href='reg_home.php';";
     print "</script>";
}
else
{
	print "not Done";
}
}
else
{
     print "<script>";
     print "alert('Your cart is Empty');";
     print "window.location.href='r_cart_view.php';";
     print "</script>";	 
}
?>