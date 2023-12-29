<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION['u_id'])){
    $admin -> redirect('login');

}

$iddd=$_SESSION['u_id'];
$id = $_GET['vid'];
$uid = $_SESSION['u_id'];


$stmts = $admin -> ret("SELECT * FROM `addproduct` WHERE `b_id` = '$id'");
$rows = $stmts -> fetch(PDO::FETCH_ASSOC);
$b_id = $rows['b_id'];
$disc = $rows['discount'];
$desc = $rows['description'];

$name = $rows['name'];
// $aname = $rows['aname'];
// $pname = $rows['pname'];
$actualprice = $rows['price']; 
$image = $rows['image'];
// $image = substr($image,3);
echo "<script>alert($image)</script>";


$totalprice = $actualprice - $disc ;

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
  <body> 

    <?php include "header.php" ?>
   
    <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2><?php echo $name;?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="firstproductpage.php">Home</a>
                            
                            <a href=""><?php echo $name;?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="../admin/admincontroller/<?php echo $rows['image']; ?>" height="300px" width="300px" alt="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $name;?></h2>
                                    <div class="product-inner-price">
                                       <h3>Before Discount:</h3><del><h4 style="color: red">Rs<?php echo $actualprice;?></h4></del>
                                         

                                        
                                    </div> 
                                     <div class="product-inner-price">


                                        <span> <h3>Total Amount:</h3><ins><h4>Rs<?php echo $totalprice;?></h4></ins></span>
                                         

                                        
                                    </div>  
                                    <h1>Customize</h1><h3> Your Products Here</h3>     
                                    
 
 

                             <form method="post" action="checkout.php" enctype ="multipart/form-data">
                                  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  

                                <textarea  id="summernote" required="" placeholder="Enter your content Description" name="description" class="form-control" rows="5" > </textarea>
                                <br>
                                    <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
                     
                   <input type="hidden" name="vid" value="<?php echo $id;?>">

                   <input type="hidden" name="u_id" value="<?php echo $uid;?>">  
                   <input type="hidden" name="u_id" value="<?php echo $title;?>">  

                   <input type="hidden" name="name" value="<?php echo $name;?>"> 

                   <input type="hidden" name="i" value="<?php echo $image;?>">  
                   <input type="hidden" name="amount" value="<?php echo $totalprice;?>">  

                                        <div class="quantity">
                                            <label><h3>Quantity:</h3></label>
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button style="float: right;" class="add_to_cart_button" type="submit" name="buy">CheckOut</button> <br> <br> <br>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                       <!--  <h4> Tags: <a href="">best</a>, <a href="">sale</a>, <a href="">good quality</a>. </h4> -->
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descriptions</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Description:</h2>  
                                                <h3><?php echo $desc;?></h3>

                                                
                                            </div>


                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>


                                                <form action="usercontroller/feedback.php" method="post">
                                                <div class="submit-review">
                                                <p><label for="na">Name</label> 
                                                <input required="" type="text" name="a"></p>


                                                <input type="hidden" name="c" value="<?php echo $b_id;?>"> 
                                                   
                                                    <p><label for="review">Your review</label> 
                                                        <textarea required="" name="b" id="" cols="30" rows="10"></textarea></p>

                                          

                                                    <p><input type="submit" name="add" value="Submit"></p>
                                                </div>

                                            </form>
                                           <!--  <span style="color: blue;"><a href="review.php?id=<?php echo $rows['b_id']; ?>"><h2>View all user review: </h2></span></a> -->
                                            </div>

                                           


                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
             
                    </div>                    
                </div>
            </div>
        </div>
    </div>


     <?php include "footer.php" ?>
   
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
  </body>
</html>