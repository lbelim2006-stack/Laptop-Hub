<?php include("header.php"); ?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>REVIEW</h2>
                   
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <form class="main_form" method="post" action="review_code.php" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="prod_id" type="text" name="prod_id" required>
									<select name="prod_id" class="contactus">
								  <?php
									include("connect.php");
									$q="select * from product_master_tbl";
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
                                    <input class="contactus" placeholder="review_mes" type="text" name="review_mes" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="review_date" type="date" name="review_date" required>
                                 </div>
								<div class="col-md-12">
                                    <input class="contactus" placeholder="user_id" type="text" name="user_id" required>
								<select name="user_id" class="contactus">
								  <?php
									include("connect.php");
									$q="select * from user_master_tbl";
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
                                    <input class="contactus" placeholder="review_photo" type="file" name="review_photo" required>
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
