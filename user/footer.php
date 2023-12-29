
 <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h1> About US</h1>
                        <h5>At PRINT ON DEMAND
 we are working towards bringing our retail experience to the web and we strive to uphold this prestige by serving our customers better.</h5>
                        <!-- <div class="footer-social">
                            <a href="facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="instagram.com" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="youtube.com" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="likdn.com" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div> -->
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h1>User Navigation </h1>
                        <ul>
                            <li><a href="firstproductpage.php">My account</a></li>
                            <li><a href="orderdetail.php">Order history</a></li>
                            
                        </ul>                        
                    </div>
                </div>
                



                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h1>Categories</h1>
                         <?php

       $stc = $admin -> ret("SELECT * FROM `addcat`");

      while ($roc= $stc -> fetch(PDO::FETCH_ASSOC)) {

      ?>
          <a class="dropdown-item" href="csecondproductpage.php?id=<?= $roc['cat_id']; ?>"><?php echo $roc['cname']; ?></a>
          
        
       
    <?php } ?>


                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h1>Contact Us</h1>
                        <h3>Share feedback for exclusive inbox deals!</h3>
                        <div class="newsletter-form">
                            <form action="usercontroller/adminfeedback.php" method="post">
                                <input type="text" style="color:black" placeholder="enter your name" name="a"><br>
                                <br>
                                <textarea name="b" style="color:black" rows="3" cols="40" placeholder="enter your message" ></textarea><br>

                                <input type="hidden" name="c" value="<?php echo $iddd; ?>">
                                <input type="submit" value="Send" name="add">
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 PRINT ON DEMAND. All Rights Reserved.</p>
                    </div>
                </div>
                
                <!-- <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div> -->
            </div>
        </div>
    </div>