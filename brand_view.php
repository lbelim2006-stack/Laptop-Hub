<?php include("admin_header.php")?>
   
   <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
				  <h2>BRAND VIEW</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                 
                     <div class="row">
                        <div class="col-md-12 ">
				<a href="brand.php" class="btn btn-primary">Add Brand</a>	
           
<table class="table table-striped">
<tr>
		  <th>brand id</th>
		  <th>brand name</th>
		  <th>brand description</th>
		  <th>brand logo</th>
          <th>Edit</th>
          <th>delete</th>
          <?php
		  include("connect.php");
		  $q="select * from brand_tbl";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
			  ?>
			  <tr>
			  <td><?php print $row[0];?></td>
			  <td><?php print $row[1];?></td>
			  <td><?php print $row[2];?></td>
			   <td><img src="<?php print $row[3];?>" width="100" height="100"></td>
		  	   </td>
			   <td><a href="brand_edit.php?brand_id=<?php print $row[0];?>"><input type="button" value="edit" class="btn btn-success"></a></td>
			   <td><a href="brand_delete.php?brand_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>
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