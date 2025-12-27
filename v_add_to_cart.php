<?php
include("connect.php");
$user_id=$_POST['user_id'];
$prod_id=$_POST['prod_id'];
$prod_qty=intval($_POST['prod_qty']);
$prod_price=intval($_POST['prod_price']);
$prod_price=($prod_qty*$prod_price);
$q1="select * from cart_master_tbl where prod_id=$prod_id";
$res=mysqli_query($con,$q1);
if($row1=mysqli_fetch_row($res1))
{
	$old_prod_qty=$row1[3];
	$new_prod_qty=$old_prod_qty*$prod_qty;
	$new_prod_price=$new_prod_qty*$prod_price;
	$q="update cart_master_tbl set prod_qty=$new_prod_qty,total_price";
	
}
else
{
	$q="INSERT INTO cart_master_tbl(user_id,prod_id,prod_qty,prod_price,total_price)VALUES($user_id,$prod_id,$prod_qty,$prod_price,$total_price";
}
$res=mysqli_query($con,$q);

if($res==1)
{
	header("location:v_cart_view.php?user_id=$user_id");
}
else
{
	print"not added";
}
?>
