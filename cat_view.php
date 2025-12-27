<?php include("admin_header.php")?>
   
   <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>CATEGORY</h2>
                  
				  
                  </div>
				  <div class="row">
                        <div class="col-md-12">
                          <a href="category.php" class="btn btn-primary">Add Category</a>
               
<table class="table table-striped">
<tr>

		  <th>Cat Id</th>
		  <th>Cat Name</th>
		  <th>Cat Description</th>
		  <th>Cat Photo</th>
		  <th>Cat Edit</th>
		  <th>Cat Delete</th>
		
          <?php
		  include("connect.php");
		  $q="select * from category_tbl";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
		  ?>
			  <tr>
			  <td><?php print $row[0];?></td>
			  <td><?php print $row[1];?></td>
			  <td><?php print $row[2];?></td>
			   <td><img width="150" height="150" src="<?php print $row[3];?>"></td>
			   <td><a href="cat_edit.php?cat_id=<?php print $row[0];?>"><input type="button" value="edit" class="btn btn-success"></a></td>
			   <td><a href="cat_delete.php?cat_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>
			  </tr>
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
           
<?php include("footer.php")?>