<?php include("v_header.php"); ?>
 
 
 
      <div id="contact" class="request">
         <div class="container" style="margin-top:60px;">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>LOGIN</h2>
                   
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-12">
                           <form class="main_form" method="post" action="login_code.php">
                              <div class="row">
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder=" User Name" type="text" name="username" required data-error="please enter name">
                                 </div>
                                 <div class="col-md-12">
                                    <input class="contactus" placeholder="password" type="password" name="password" required data-error="please enter password">
                                 </div>
								 <div class="col-md-12">
                                 
								 <select name="usertype" class="contactus">
								 <option value="none">Select User Type</option>
								 <option value="admin">Administrator</option>
								 <option value="reguser">Register User</option>
								 </select>
								 </div>
								 <div class="col-md-12">
								 <center>
									<button type="submit" style="font-size:24px; margin-top:20px; background-color:#e0fdf9!important; border:2px solid black;  border-radius:15px; padding-left:15px; padding-right:15px;">Login</button>
								</center>
                                 
							
                              </div>
                           </form>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>	
	</div>
     
           



<?php include("footer.php") ?>
