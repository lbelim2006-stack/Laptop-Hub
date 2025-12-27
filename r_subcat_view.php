<?php include("r_header.php");
include("connect.php");
?>

      <div id="" class="best" style="margin-top:0px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12"  style="margin-top:200px;">
                  <div class="titlepage">
                     <h2>Our Subcategories </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               
		<?php
		  $cat_id=$_GET["cat_id"];
		  $q="select * from sub_category where cat_id=$cat_id";
		  $res=mysqli_query($con,$q);
		  while($row=mysqli_fetch_array($res))
		  {
		  ?>
		
				<div class="col-md-4">
                  <div class="best_box" style="width:350px;height:420px;">
					<a href="r_product_view.php?sub_cat_id=<?php print $row[0];?>&&cat_id=<?php print $cat_id;?>">
				<img class="contactus" src="<?php print $row[3];?>" style="width:350px;height:300px;">
				</a>
				<div class="mixer_text" style="color:white;"></div>
				
                    <h4 class="contactus" ><?php print $row[1];?></h4>
					</div>
				</div>
			<?php
		  }
		  ?>	
		  
            </div>
         </div>
      </div>
<?php include("footer.php");?>
