<?php 
include("admin_header.php");
include("connect.php");
?>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="titlepage">
 <div class="container" style="margin-top:60px;">

 <center><h1>Welcome to Admin Panel</h1></center>
 </div>
 
<!--<link rel="stylesheet" type="text/css" href="box-css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="box-css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="box-css/style.min.css">
<link rel="stylesheet" type="text/css" href="box-css/colors.min.css">
<!--<link rel="stylesheet" type="text/css" href="box-css/bootstrap1.min.css">-->
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


<div class="grey-bg container-fluid" style="margin-top:60px;">
  <section id="minimal-statistics">
    <div class="row">
      <div class="col-12 mt-3 mb-1">
        
      </div>
    </div>
	</div>
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <?php
				$q1="select count(*)from category_tbl";
				$res1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_row($res1))
				{
				?>
				<h3><?php print $row[0]?></h3>
				<?php
				}
				?>
				<a href="cat_view.php"><span>Category</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-speech warning font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <?php
				$q1="select count(*)from sub_category";
				$res1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_row($res1))
				{
				?>
				<h3><?php print $row[0]?></h3>
				<?php
				}
				?>
				<a href="sub_cat_view.php"><span>Sub Category</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-graph success font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                <?php
				$q1="select count(*)from brand_tbl";
				$res1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_row($res1))
				{
				?>
				<h3><?php print $row[0]?></h3>
				<?php
				}
				?>
				<a href="brand_view.php"><span>Brand</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  
    <div class="row">
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                <?php
				$q1="select count(*)from product_master_tbl";
				$res1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_row($res1))
				{
				?>
				<h3><?php print $row[0]?></h3>
				<?php
				}
				?>
				<a href="product_view.php"><span>Product</span></a>
                </div>
                <div class="align-self-center">
                  <i class="icon-rocket danger font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
				<?php
				$q1="select count(*)from user_master_tbl";
				$res1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_row($res1))
				{
				?>
				<h3><?php print $row[0]?></h3>
				<?php
				}
				?>
				<a href="user_registration_view.php"><span>User</span></a>
                  
                </div>
                <div class="align-self-center">
                  <i class="icon-user success font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="col-xl-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="media-body text-left">
                 <?php
				$q1="select count(*)from order_master_tbl";
				$res1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_row($res1))
				{
				?>
				<h3><?php print $row[0]?></h3>
				<?php
				}
				?>
				<a href="order_view.php"><span>Order</span></a> 
                  
                </div>
                <div class="align-self-center">
                  <i class="icon-pie-chart warning font-large-2 float-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
	<div>
	  
  </div>
    
  </section>
  
  


</div>
</div>
</div>
</div>

<?php include("footer.php");?>