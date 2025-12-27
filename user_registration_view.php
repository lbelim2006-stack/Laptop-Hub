<?php include("admin_header.php"); ?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>User Registration</h2>
                   
                  </div>
               
            <div class="row">
               <div class="col-md-12">
			   <a href="user_registration.php" class="btn btn-primary">Add User</a>
                     <div class="row">
                        <div class="col-md-12">
						
						<table class="table table-striped">
<tr>

		  <th>User Id</th>
		  <th>User Name</th>
		  <th>User Email</th>
		  <th>User Address</th>
		  <th>User City</th>
		  <th>User Pincode</th>
		  <th>User Mobile</th>
		  <th>User Password</th>
		  <th>User Photo</th>
          <th>Edit</th>
          <th>Delete</th>
          <?php
		  include("connect.php");
		  $q="select * from user_master_tbl";
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
			  <td><?php print $row[5];?></td>
			  <td><?php print $row[6];?></td>
			  <td><?php print $row[7];?></td>
			  
			   <td><img src="<?php print $row[8];?>" width="100" height="100"></td>
			   
			   <td><a href="user_registration_edit.php?user_id=<?php print $row[0];?>"><input type="button" value="edit" class="btn btn-success"></a></td>
			   <td><a href="user_registration_delete.php?user_id=<?php print $row[0];?>"><input type="button" value="delete" class="btn btn-danger"></a></td>
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
		</div>
      </div>
      <!-- end request -->
     
           



<?php include("footer.php") ?>

