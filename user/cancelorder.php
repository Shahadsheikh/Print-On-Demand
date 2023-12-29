<?php
define('DIR','../');
require_once DIR . 'config.php';
$admin = new Admin();

if(isset($_GET['oor_id'])){
    $orid = $_GET['oor_id'];

    $stmt = $admin -> cud("UPDATE `orderedproducts` SET `status` = 'Canceled' WHERE `orderedproducts`.`or_id` = '$orid'","updated");
    
      if($stmt){
            echo "<script>alert('Order Cancelled Successfully.');
                        window.location.href='orderdetail.php';
                    </script>";
        }else{
                    echo "<script>alert('Something Went Wrong Please Try Again.');
                       window.location.href='orderdetail.php';
                    </script>";
        }
}
if(isset($_GET['or_id'])){
    $orid = $_GET['or_id'];

    $stmt = $admin -> cud("UPDATE `addorderdetail` SET `status` = 'Canceled' WHERE `addorderdetail`.`or_id` = '$orid'","updated");
    
      if($stmt){
            echo "<script>alert('Order Cancelled Successfully.');
                        window.location.href='orderdetail.php';
                    </script>";
        }else{
                    echo "<script>alert('Something Went Wrong Please Try Again.');
                       window.location.href='orderdetail.php';
                    </script>";
        }
}


?>