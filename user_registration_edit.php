<?php include("header.php"); 
include("connect.php"); 

?>
<?php
 
	$user_id=$_GET['user_id'];
	
	$q="select * from user_master_tbl where user_id=$user_id";
	$res=mysqli_query($con,$q);
?>

 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>User Registration</h2>
                   </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <form class="main_form" action="user_registration_edit_code.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                               
							   <?php
								$res=mysqli_query($con,$q);
								while($row=mysqli_fetch_row($res))
								{
								?>
							   <div class="col-md-12 ">
									<input type="hidden" value="<?php print $row[0]?>" name="user_id" required>
                                	<input class="contactus" value="<?php print $row[1]?>" type="text" name="user_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" value="<?php print $row[2]?>" type="text" name="user_email" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus"value="<?php print $row[3]?>" type="text" name="user_address" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" value="<?php print $row[4]?>" type="text" name="user_city" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" value="<?php print $row[5]?>" type="text" name="user_pincode" required>
                                 </div
								  <div class="col-md-12">
                                    <input class="contactus"value="<?php print $row[6]?>" type="text" name="user_mobile" required>
                                 </div>
                                 
                                 <div class="col-md-12">
                                    <input class="contactus" value="<?php print $row[7]?>" type="password" name="user_password" required>
                                 </div>
                                
                                 <div class="col-md-12">
                                    <input class="contactus" value="<?php print $row[8]?>"type="file" name="user_photo" required>
                                 </div>
                                
								 <?php
							     }
								 ?>  
								 
                                 <div class="col-sm-12">
                                    <button class="send_btn" type="submit">Save</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- end request -->
     
           



<?php include("footer.php") ?>
