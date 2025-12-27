<?php 
include("header.php");
include("connect.php");
?>
<?php
 
	$prod_id=$_GET['prod_id'];
	$q="select * from product_master_tbl where prod_id=$prod_id";
	$res=mysqli_query($con,$q);
?>
 
 
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
				  <h2>PRODUCT EDIT</h2>
                     
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                           <form class="main_form" action="product_edit_code.php"  method="post"  enctype="multipart/form-data">
                            <?php
							 $res=mysqli_query($con,$q);
							 while($row=mysqli_fetch_row($res))
							 {
							 ?>
							 
							     <div class="col-md-12">
                                    <input class="contactus" type="hidden" value="<?php print $row[0];?>" name="prod_id" required>
								    <input class="contactus" type="text" value="<?php print $row[1];?>" name="prod_name" required>
                                 </div>
								 
							    <div class="col-md-12">
                                    <textarea class="contactus" placeholder="Description" type="text" name="prod_description" required><?php print $row[2];?></textarea>
                                 </div>
								 
								 <div class="col-md-12">
								  <img src="<?php print $row[3];?>" width="100px" height="100px">
                                    <input class="contactus" placeholder="Photo" type="file" name="prod_photo" required>
                                 </div> 
								 
								 <div class="col-md-12">
                                    <input class="contactus" type="text" value="<?php print $row[4];?>" name="prod_price" required>
								</div>
								
                                 <?php
								} 
								 ?>
								 
								 <div class="col-md-12">
								  <select name="cat_id" class="contactus">
								  <?php
									include("connect.php");
									$q="select * from category_tbl";
									$res=mysqli_query($con,$q);
									while($row=mysqli_fetch_row($res))
									{
									?>
									<option value="<?php print $row[0];?>"><?php print $row[1];?></option>
								  <?php
									}
								  ?>
								  </select>
								  
								  </div>
								  
								  <div class="col-md-12">
								  <select name="sub_cat_id" class="contactus">
								  <?php
									include("connect.php");
									$q="select * from sub_category";
									$res=mysqli_query($con,$q);
									while($row=mysqli_fetch_row($res))
									{
									?>
									<option value="<?php print $row[0];?>"><?php print $row[1];?></option>
								  <?php
									}
								  ?>
								  </select>
								  
								  </div>
								  
								  <div class="col-md-12">
								  <select name="brand_id" class="contactus">
								  <?php
									include("connect.php");
									$q="select * from brand_tbl";
									$res=mysqli_query($con,$q);
									while($row=mysqli_fetch_row($res))
									{
									?>
									<option value="<?php print $row[0];?>"><?php print $row[1];?></option>
								  <?php
									}
								  ?>
								  </select>
								  
								  </div>
	                            <div class="col-md-12">
                                 <button class="send_btn" type="submit">Update</button>
                                 </div>	
								 
                           </form>
			</div>			   
          </div>
       </div>
     </div>
                      
          
      <!-- end request -->
     
<?php include("footer.php") ?>


