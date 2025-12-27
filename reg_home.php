<?php include("r_header.php");?>
<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
<div class="row">
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" style="height:600px;width:100%;margin-top:120px;">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img1.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img2.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img3.jpeg" alt="Third slide">
    </div>
	<div class="carousel-item">
      <img class="d-block w-100" src="img4.jpeg" alt="fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>
</div>
</div>
</div>

<div id="" class="best" style="margin-top:0px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12"  style="margin-top:200px;">
                  <div class="titlepage">
                     <h2>Newly Arrival Laptops</h2>
                  </div>
               </div>
            </div>
            <div class="row">
       <?php
		include("connect.php");
		 $q="select * from product_master_tbl order by rand() limit 6";
	   
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
