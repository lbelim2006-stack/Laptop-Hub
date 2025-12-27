<?php include("header.php"); ?>
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
                           <form class="main_form" action="user_registration_code.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                               <div class="col-md-12 ">
                                    <input class="contactus" placeholder="Name" type="text" name="user_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="email" type="text" name="user_email" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="address" type="text" name="user_address" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="city" type="text" name="user_city" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="pincode" type="text" name="user_pincode" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="phone number" type="text" name="user_mobile" required>
                                 </div>
                                 
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="password" type="password" name="user_password" required>
                                 </div>
                                
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="photo" type="file" name="user_photo" required>
                                 </div>
                                
								 
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