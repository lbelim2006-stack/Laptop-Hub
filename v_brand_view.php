<?php include("v_header.php");?>

      <div id="" class="best" style="margin-top:0px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12"  style="margin-top:200px;">
                  <div class="titlepage">
                     <h2>Laptop Brands </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               
		<?php
		  include("connect.php");
		  $q="select * from brand_tbl";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
		  ?>
		
			   <div class="col-md-4">
                  <div class="best_box">
					 <a href="v_product_view.php?brand_id=<?php print $row[0];?>">
					 <img src="<?php print $row[3];?>" style="width:350px;height:300px;">	
                     </a>
					 
					 <h4><?php print $row[1];?></h4>
                  </div>
               </div>
			   
			<?php
		  }
		  ?>		
            </div>
         </div>
      </div>
<?php include("footer.php");?>
