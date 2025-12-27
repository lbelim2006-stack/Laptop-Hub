<?php include("admin_header.php")?>
   
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
			   <div class="titlepage">
                     <h2>SUB CATEGORY</h2>
                  
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
    <a href="sub_category.php" class="btn btn-primary">Add Category</a>
           
<table class="table table-striped">
<tr>

		  <th>subcat id</th>
		  <th>subcat name</th>
		  <th>subcat description</th>
		  <th>subcat photo</th>
		  <th>cat id</th>
          <th>edit</th>
          <th>delete</th>
		  
          <?php
		  include("connect.php");
		  $q="select * from sub_category";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_row($res))
		  {
			  ?>
			  <tr>
			  <td><?php print $row[0];?></td>
			  <td><?php print $row[1];?></td>
			  <td><?php print $row[2];?></td>
			  
			   <td><img src="<?php print $row[3];?>" width="100" height="100"></td>
			  <td>
			  <?php
			   $cat_id=$row[4];
			   $q1="select * from category_tbl where cat_id=$cat_id";
			   $res1=mysqli_query($con,$q1);
			   while($row1=mysqli_fetch_row($res1))
			   {
				   print $row1[1];
			   }
			   ?>
				</td>	
			   <td><a href="sub_cat_edit.php?sub_cat_id=<?php print $row[0];?>"><input type="button" value="edit" class="btn btn-success"></a></td>
			   <td><a href="sub_cat_delete.php?sub_cat_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>
			  
			  <?php
		       }
            	?>
				</tr>
          </table>
		  
     		</div>
					</div>
				 </div>

				</div>
			</div>
		</div>
		</div>
<?php include("footer.php")?>


