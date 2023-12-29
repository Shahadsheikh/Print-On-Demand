<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION['u_id'])){
    $admin -> redirect('login');

}


$iddd=$_SESSION['u_id'];
?>

<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRINT ON DEMAND</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


    <![endif]-->
    <style>
.nav-item {
  margin-left:30px;
  margin-right:30px;
}
    </style>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  </head>
  <body style="background-color: white;">

<?php include "header.php" ?>

 <section style="background-image: url('img/slide.jpg'); height: 600px; background-size: cover;">
<h3 style="margin-left:600px;margin-top:-200px; width:30%;color:white; "></h3>
<p style="margin-left:600px; font-size: 15px;color:white; ";>
</p>
<!-- <img style="margin-left: 700px;margin-top:-200px; width:25%"; src="img/b1.png" alt="Slide" > -->



</section>


    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                

                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Easy Order</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Fresh products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product"><br><br>
                        <h2 class="section-title">Order Now!!</h2>
                        <div class="product-carousel">

                         <?php 
                   
                            $stmts = $admin -> ret("SELECT * FROM `addproduct` ORDER BY `b_id` DESC");
                            while($rows = $stmts-> fetch(PDO::FETCH_ASSOC)){ 
                            $image = $rows['image'];
                            $image = substr($image,2);
                        ?>


                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../admin/admincontroller/<?php echo $rows['image']; ?>" height="300px" width="300px" alt="">
                                    <div class="product-hover">
                                       
                                        <a href="thirdproductpage.php?vid=<?php echo $rows['b_id']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="thirdproductpage.php?vid=<?php echo $rows['b_id']?>"><?php echo $rows['name'] ; ?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>Rs.<?php echo $rows['price'] ; ?></ins> Off Rs.<?php echo $rows['discount'] ; ?>
                                </div> 
                            </div>

                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> </div> <!-- End main content area -->

    
    <!-- <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
        

        </div> -->
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title" style="font-size:27px;" >Mugs</h2>
                        <a href="nsecondproductpage.php" class="wid-view-more">View All</a>



            <?php 
                $stmtss = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='mugs' LIMIT 3");
                    while($rowss = $stmtss-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowss['image'];
                        $image = substr($image,3);
                
                
                ?>

                        <div class="single-wid-product">
                            <a href="firstproductpage.php"><img src="../admin/admincontroller/<?php echo $rowss['image']; ?>" height="100px" width="100px" alt="" class="product-thumb"></a>
                            <h2><a href="thirdproductpage.php?vid=<?php echo $rowss['b_id']?>"><?php echo $rowss['name'] ; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>Rs.<?php echo $rowss['price'] ; ?></ins> Off Rs.<?php echo $rowss['discount'] ; ?>
                            </div>                            
                        </div>

                    <?php } ?>

                      
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">T-Shirts</h2>
                        <a href="osecondproductpage.php" class="wid-view-more">View All</a>
                 
                            <?php 
                   
                $stmtsss = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='tshirt' LIMIT 3");
                    while($rowsss = $stmtsss-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowsss['image'];
                        $image = substr($image,3);
                
                
                ?>

                        <div class="single-wid-product">
                            <a href="firstproductpage.php"><img src="../admin/admincontroller/<?php echo $rowsss['image']; ?>" height="100px" width="100px" alt="" class="product-thumb"></a>
                            <h2><a href="thirdproductpage.php?vid=<?php echo $rowsss['b_id']?>"><?php echo $rowsss['name'] ; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>Rs.<?php echo $rowsss['price'] ; ?></ins> Off Rs.<?php echo $rowsss['discount'] ; ?>
                            </div>                            
                        </div>

                    <?php } ?>


                    
                        
                    </div>
                </div>





                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Flex & CARDS</h2>
                        <a href="usecondproductpage.php" class="wid-view-more">View All</a>
                        




             <?php 

                $stmtssss = $admin -> ret("SELECT * FROM `addproduct` WHERE `condname`='Others' LIMIT 3");
                    while($rowssss = $stmtssss-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowssss['image'];
                        $image = substr($image,3);
                
                
                ?>

                        <div class="single-wid-product">
                            <a href="firstproductpage.php"><img src="../admin/admincontroller/<?php echo $rowssss['image']; ?>" height="100px" width="100px" alt="" class="product-thumb"></a>
                            <h2><a href="thirdproductpage.php?vid=<?php echo $rowssss['b_id']?>"><?php echo $rowssss['name'] ; ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>Rs.<?php echo $rowssss['price'] ; ?></ins>Off Rs.<?php echo $rowssss['discount'] ; ?>
                            </div>                            
                        </div>

                    <?php } ?>
                        
                    </div>
                </div>


            </div>
        </div>
    </div> 
    <!-- End product widget area -->


<?php include "footer.php" ?>
    
    <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>