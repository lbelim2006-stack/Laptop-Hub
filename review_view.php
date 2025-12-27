<?php include("admin_header.php")?>

<div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
			   <div class="titlepage">
				  <h2>Review</h2>
                  </div>
                           
<table class="table table-striped">
<tr>

		  <th>Review Id</th>
		  <th>prod Id</th>
		  <th>Review Mes</th>
		  <th>Review Date</th>
		  <th>User Id</th>
		  <th>Review photo</th>
		  <th>Delete</th>
</tr>
		
          <?php
		  include("connect.php");
		  $q="select * from review_master_tbl";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
		  ?>
			  <tr>
			  <td><?php print $row[0];?></td>
			  <td><?php print $row[1];?></td>
			  <td><?php print $row[2];?></td>
			  <td><?php print $row[3];?></td>
			  <td><?php print $row[4];?></td>
             
			   <td><img width="150" height="150" src="<?php print $row[5];?>"></td>

			   <td><a href="review_delete.php?review_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></td>
			  </tr>
			  <?php
		  }

			?>
			
</table>

						</div>
					</div>
               </div>
            </div>
	
<?php include("footer.php")?>