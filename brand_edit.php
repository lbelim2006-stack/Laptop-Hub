<?php 
include("header.php");
include("connect.php");
?>
<?php 
 
	$brand_id=$_GET['brand_id'];
	$q="select * from brand_tbl where brand_id=$brand_id";
	$res=mysqli_query($con,$q);
?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
			   <div class="titlepage">
			   <h2>BRAND EDIT</h2>
                  
               </div>
            </div>
			</div>
            <div class="row">
               <div class="col-md-12">
                           <form class="main_form" action="brand_edit_code.php"  method="post"  enctype="multipart/form-data">
                             
							 <?php
							 $res=mysqli_query($con,$q);
							while($row=mysqli_fetch_row($res))
							 {
							 ?>
							 
							     <div class="col-md-12">
                                    <input class="contactus" type="hidden" value="<?php print $row[0];?>" name="brand_id" required>
                                    <input class="contactus" type="text" value="<?php print $row[1];?>" name="brand_name" required>
                                 </div>
								 
							    <div class="col-md-12">
                                    <textarea class="contactus" placeholder="Description" type="text" name="brand_description" required><?php print $row[2];?></textarea>
                                 </div>
								 
								  <div class="col-md-12">
								  <img src="<?php print $row[3];?>" width="100" height="100">
                                    <input class="contactus"  type="file" name="brand_logo" required>
                                 </div>
                                 
							     <?php
							     }
								?>  
                           
                       
                          <div class="col-md-12">
                                    <button class="send_btn" type="submit">Save</button>
                            </div>
						 </form>
                     </div>
                  </div>
               </div>
          </div>
      <!-- end request -->
<?php include("footer.php") ?> 	