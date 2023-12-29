<!-- <div class="brand" style="background-color:lightblue;" >
        <p style="font-size: 20px;color:#ce3434 ;"><img src="assets/img/dop.png" height="50" width="230"></img></p> -->

  </div>
        </div>
    </div> <!-- End header area -->
    
    <!-- End site branding area -->
    
    
           
        <div class="mainmenu-area">
        <div class="container">
        <div class="row">    
<nav class="navbar navbar-expand-lg navbar-light ">
  <!-- <a class="navbar-brand" href="#">Home</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="firstproductpage.php" style="color:white;">Home Page <span class="sr-only">(current)</span></a>
      </li>
      <li>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="nsecondproductpage.php" style="color:white;">MUGS</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="osecondproductpage.php" style="color:white;">
Tshirts</a>
      </li>

      <li class="nav-item dropdown" style="color:white;">
        <a style="color:white;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Categories
        </a>

     
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <?php

       $stc = $admin -> ret("SELECT * FROM `addcat`");

      while ($roc= $stc -> fetch(PDO::FETCH_ASSOC)) {

      ?>
          <a class="dropdown-item" href="csecondproductpage.php?id=<?= $roc['cat_id']; ?>"><?php echo $roc['cname']; ?></a>
          
        
       
    <?php } ?>
     </div>

      </li>
      

       <li class="nav-item">
        <a class="nav-link" href="orderdetail.php" style="color:white;">My Order Details</a>
      </li>
      <li class="nav-item">
        <li><a  class="nav-link" href="logout.php" style="color:white;"><i class="fa fa-user" style="color:white;"></i> Logout</a></li>
      </li>
     
    </ul>
    
  </div>
</nav>
</div>
</div>
</div>


 <!-- End mainmenu area -->
    
   