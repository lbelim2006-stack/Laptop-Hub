<?php include("admin_header.php"); ?>

<div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
				  <h2>order view</h2>
                  </div>
				  <div class="row">
                        <div class="col-md-12">

<table class="table table-striped">
<tr>
		  <th>Order ID</th>
		  <th>User Name</th>
		  <th>Product Name</th>
		  <th>Product Price</th>
		  <th>Product Quality</th>
	      <th>Total Price</th>		  
		  <th>Order Date</th>
		  <th>Delete</th>
</tr>
		  <?php
		  include("connect.php");
		  $q="select * from order_master_tbl";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
		  ?>
		  <tr class="text-black">
		  <td><?php print $row[0];?></td>
		  <td>
		  <?php
		     $user_id=$row[1];
			 $q1="select * from user_master_tbl where user_id=$user_id";
			 $res1=mysqli_query($con,$q1);
			 while($row1=mysqli_fetch_row($res1))
			 {
				 print $row1[1];
			 }
			 ?>
		  </td>
		  <td>
		  <?php
		  $prod_id=$row[2];
		  $q2="select * from product_master_tbl where prod_id=$prod_id";
		  $res2=mysqli_query($con,$q2);
		  while($row2=mysqli_fetch_row($res2))
		  {
			  print $row2[1];
		  }
		  ?>
		  </td>
		  <td><?php print $row[3];?></td>
		  <td><?php print $row[4];?></td>
		  <td><?php print $row[5];?></td>
		  <td><?php print $row[6];?></td>
		  <td><a href="order_delete.php?order_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>
		  </tr>
		  <?php
		  }
		  ?>
		 
		  </table>
		   </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

 
<?php include("footer.php");?>