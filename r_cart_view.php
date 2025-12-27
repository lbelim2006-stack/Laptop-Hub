<?php include("r_header.php");?>
<?php
include("connect.php");
$user_id=$_SESSION['user_id'];
$q="select * from cart_master_tbl where user_id=$user_id";
$res=mysqli_query($con,$q);
?>
<div class="container">
<div class="row">
<div class="col-md-12" style="text-align:center;margin-top:160px;">
     <h1>your shopping cart</h1>
</div>
</div>
<div class="row">
<table class="table table-striped">
<tr>
	<th>Product photo</th>
	<th>Product Name</th>
	<th>Product Quentity</th>
	<th>Product Price</th>
	<th>total Price</th>
	<th>Delete</th>

</tr>
   <?php
     $grant_total=0;
     while($row=mysqli_fetch_row($res))
     {
       $grant_total=$grant_total+$row[5];
       $prod_id=$row[2];
       $q1="select * from product_master_tbl where prod_id=$prod_id";
	   $res1=mysqli_query($con,$q1);
	   while($row1=mysqli_fetch_row($res1))
	   {
		   ?>
		   <tr>
	 <td><img src="<?php print $row1[3];?>" width="100px" height="100px"></td>
		<td><?php print $row1[1];?></td>
		<td><?php print $row[3];?></td>
		<td><?php print $row1[4];?></td>
		<td><?php print $row[5];?></td>
		<td><button class="btn btn-danger"  >Delete</button>
		</td>
		</tr>
		<?php
	   }
	 }
	 ?>
	 <tr>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td><b>Grant Total</b></td>
	 <td><?php print $grant_total;?></td>
	 <td></td>
	 </tr>
	 
	 <tr>
	 <td><a href="reg_home.php"><button class="btn btn-info">Back To Shopping</button></a></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td></td>
	 <td><a href="r_place_order.php?user_id=<?php print $user_id;?>"><button class="btn btn-success">Place Order</button></a></td>
    </tr>
	</table>
	
</div>
</div>
<?php include("footer.php");?>