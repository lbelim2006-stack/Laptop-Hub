<?php include("r_header.php");
include("connect.php");
?>
 <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row" style="margin-top:0px;text-align:center;margin-bottom:200px;">
			<div class="col-md-12">
			<h3>Product Details</h3>
			</div>
			</div>
			
			<div class="row">
			
				<?php
				$prod_id=$_GET['prod_id'];
				$q="select * from product_master_tbl where prod_id=$prod_id";
				$res=mysqli_query($con,$q);
				if($row=mysqli_fetch_row($res))
				{					
				?>
                <div class="col-xl-5 col-lg-5 col-md-6">
                 <img src="<?php print $row[3];?>" style="width:100%;height:100%;">   
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php print $row[1];?></h2>
                        <h5><b>Rs.</b><?php print $row[4];?></h5>
						<h4><b>Short Description:</b></h4>
						<p><?php print $row[2];?></p>
						<form action="add_to_cart.php" method="post">
						<div class="form-group quantity-box row">
						<div class="col-md-7">
                         <input type="hidden" name="prod_id" value="<?php print $prod_id;?>">						
                         <input type="hidden" name="user_id" value="<?php print $_SESSION['user_id'];?>">						
                         <input type="hidden" name="prod_price" value="<?php print $row[4];?>"><br>					
						
							<label class="control-label">Quantity</label>
							<input name="prod_qty" class="form-control" value="1" min="1" max="20" type="number">
						</div>
						<div class="col-md-5" style="margin-top:30px;"><br>
						<button class="btn btn-primary">Add To Cart</button>
						</div>
						</div>
						</form>	
							<div class="row">
			<div class="contactus" style="width:100%;">
					<div>
						<h2>Give Review</h2>
					</div>
					<div class="card-body">
					<form action="review_code.php" method="post" enctype="multipart/form-data">
					<div class="row">
					<input type="hidden" name="user_id" value="<?php print $_SESSION['user_id'];?>">
					
					<input type="hidden" name="prod_id" value="<?php print $prod_id;?>">
					<div class="col-md-6">
					<textarea  style="height:50px;" name="review_mes" class="form-control"></textarea>
					</div>
					<div class="col-md-4">
					<input  style="height:50px;" type="file" class="form-control" name="review_photo">
					</div>
					<div class="col-md-2">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					</div>
					</form>
					</div>
					</div>
			</div>
						
						
                    </div>
                </div>
				<?php
				}
				?>
            </div>
        </div>
    </div>
    <!-- End Cart -->

<?php include("footer.php");?>