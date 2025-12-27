<?php include("r_header.php");
include("connect.php");
?>

      <div id="" class="best" style="margin-top:0px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12"  style="margin-top:200px;">
                  <div class="titlepage">
                     <h2>Our products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
       <?php
	   if(isset($_GET['cat_id'])&& isset($_GET['sub_cat_id']))
	   {
	   $sub_cat_id=$_GET["sub_cat_id"];
	   $cat_id=$_GET["cat_id"];
	   $q="select * from product_master_tbl where cat_id=$cat_id and sub_cat_id=$sub_cat_id";
	   }
	   else if(isset($_GET['brand_id']))
	   {
	   $brand_id=$_GET["brand_id"];
	   $q="select * from product_master_tbl where brand_id=$brand_id";
	   }
	   else
	   {
		  $q="select * from product_master_tbl";
	   }
		
		
		
	  $res=mysqli_query($con,$q);
	   while($row=mysqli_fetch_row($res))
	  {
	  ?>
	 
				 <div class="col-md-4">
                  <div class="best_box">
					<a href="r_product_detail.php?prod_id=<?php print $row[0];?>">
				 <img class="contactus" src="<?php print $row[3];?>" style="width:300px;height:200px;">
				</a>
				<div class="mixer_text" style="color:white;"></div>
				
                    <h5 style="font-size:25px;margin-top:10px;"><?php print $row[1];?></h5>
					<h5 style="font-size:20px;">
                     Rs.<?php print $row[4];?>
                     </h5>
					</div>
					
				</div>
			<?php
		  }
		  ?>	
		  
            </div>
         </div>
      </div>
<?php include("footer.php");?>
