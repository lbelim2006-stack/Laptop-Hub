<?php include("header.php"); ?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>PRODUCT TABLE</h2>
                   
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <form class="main_form" action="product_code.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                               <div class="col-md-12 ">
                                    <input class="contactus" placeholder="name" type="text" name="prod_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Description" type="text" name="prod_description" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="photo" type="file" name="prod_photo" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="price" type="number" name="prod_price" required>
                                 </div>
                                 
								  <div class="col-md-12">
								  <select name="cat_id" class="contactus" type="hidden">
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
								  <select name="sub_cat_id" class="contactus" type="hidden">
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
     
           



<?php include("footer.php") ?>