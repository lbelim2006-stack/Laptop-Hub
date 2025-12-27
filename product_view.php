<?php include("admin_header.php")?>
   
   <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>PRODUCT TABLE</h2>
                  
				  
                  </div>
				  <div class="row">
                        <div class="col-md-12">
                             <a href="product.php" class="btn btn-primary">Add product</a>
               
<table class="table table-striped">
<tr>

		  <th>Prod Id</th>
		  <th>Prod Name</th>
		  <th>Prod Description</th>
		  <th>Prod Photo</th>
		  <th>Prod Price</th>
		  <th>cat id</th>
		  <th>subcat id</th>
		  <th>brand id</th>
		  <th>Edit</th>
		  <th>Delete</th>
</tr>		
          <?php
		  include("connect.php");
		  $q="select * from product_master_tbl";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
		  ?>
			<tr>
			  <td><?php print $row[0];?></td>
			  
			  <td><?php print $row[1];?></td>
			  <td><?php print $row[2];?></td>
			   <td><img width="150" height="150" src="<?php print $row[3];?>"></td>
			   <td><?php print $row[4];?></td>
			   <td>
			   <?php
			   $cat_id=$row[5];
			   $q1="select * from category_tbl where cat_id=$cat_id";
			   $res1=mysqli_query($con,$q1);
			   if($row1=mysqli_fetch_row($res1))
			   {
				   print $row1[1];
			   }
			   ?>
			   </td>
			   
			   <td>
			   <?php
			   $sub_cat_id=$row[6];
			   $q1="select * from sub_category where sub_cat_id=$sub_cat_id";
			   $res1=mysqli_query($con,$q1);
			   if($row1=mysqli_fetch_row($res1))
			   {
				   print $row1[1];
			   }
			   ?>
			   </td>
			   
			    <td>
			   <?php
			   $brand_id=$row[7];
			   $q1="select * from brand_tbl where brand_id=$brand_id";
			   $res1=mysqli_query($con,$q1);
			   if($row1=mysqli_fetch_row($res1))
			   {
				   print $row1[1];
			   }
			   ?>
			   </td>
			   
			   <td><a href="product_edit.php?prod_id=<?php print $row[0];?>"><input type="button" value="edit" class="btn btn-success"></a></td>
			   <td><a href="product_delete.php?prod_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>
			  
			  
			  
			
			</tr>
			<?php
		  }
		  ?>
</table>

						</div>
					</div>
               </div>
            </div>
		</div>
	</div>
           
<?php include("footer.php")?>
