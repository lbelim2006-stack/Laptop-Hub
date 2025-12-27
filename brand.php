

<?php include("header.php"); ?>
 <!-- request -->
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>BRAND</h2>
                   
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                        <form class="main_form" method="post" action="brand_code.php" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Name" type="text" name="brand_name" required>
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="Description" type="text" name="brand_description" required>
                                 </div>
								  <div class="col-md-12">
                                    <input class="contactus" placeholder="logo" type="file" name="brand_logo" required>
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

<?php include("footer.php") ?>
