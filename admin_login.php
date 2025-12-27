<?php include("header.php"); ?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>admin panel</h2>
                   
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12"></div>
						  <form class="main_form" method="post" action="admin_homee.php" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Name" type="text" name="cat_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Description" type="text" name="cat_description" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="Photo" type="file" name="cat_photo" required>
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
