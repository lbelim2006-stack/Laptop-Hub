<?php include("header.php"); ?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>SUB CATEGORY</h2>
                   
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           
						   <form class="main_form" method="post" action="sub_cat_code.php" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Name" type="text" name="sub_cat_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <textarea class="contactus" placeholder="Description" type="text" name="sub_cat_description" required></textarea>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="Photo" type="file" name="sub_cat_photo" required>
                                 </div>
                                 
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
                                 
								 
                                 <div class="col-sm-12">
                                    <button class="send_btn" type="submit">Send</button>
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

<select name="cat_id">
<?php 
include("connect.php");
$q="select * from category_tbl";
$res=mysqli_query($res,$q);
while($row=mysqli_fetch_row($res))
{
	?>
	<option value="<?php print $row[0];?>"><?php print $row[1]?>
	<?php
}
?> 
                     
					 
					 
					 
 
 
 </select>
 <?php include("footer.php");?>