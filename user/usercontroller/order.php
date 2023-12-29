<?php

define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();



$uid = $_SESSION['u_id'];

$a  = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['city'];
$e = $_POST['state'];
$f = $_POST['address'];
$g = $_POST['pincode'];
$h  = $_POST['co'];
$i  = $_POST['cardname'];
$j  = $_POST['cardnumber'];
$k  = $_POST['month'];
$l  = $_POST['year'];
$m  = $_POST['cvv'];
$vid =$_POST['vid'];
$tit =$_POST['tit'];
$img =$_POST['image'];
$qty =$_POST['quantity'];
$amm =$_POST['amount'] * $qty;

 $desc  = $_SESSION['desc'];
$n  = $_SESSION['ammount'];

$odate=date("Y/m/d");



 $stmt = $admin -> cud("INSERT INTO `ordercheckout` (`u_id`,`name`, `email`,`phone`,`city`,`state`,`address`,`pin`,`paymode`,`cardname`,`cardno`,`expm`,`expy`,`cvv`,`tamount`,`odate`) VALUES ('".$uid."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$amm."','".$odate."')","saved");


 //take id


 // crate pending oreder table 

 // by using user id fetch cart items 

 // create a loop and store the product id and quentity in array 


 // prndeing oreder table insert using loop

$stmt = $admin -> ret("SELECT * FROM `ordercheckout` WHERE `u_id` = '$uid' ORDER BY `or_id` DESC LIMIT 1");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
    $oid = $row['or_id'];
}





$stmt = $admin -> cud("INSERT INTO `orderedproducts` ( `b_id`, `u_id`, `or_id`, `quantity` ,`title`,`description`,`image`) VALUES ('".$vid."','".$uid."','".$oid."','".$qty."','".$tit."','".$desc."','".$img."')","saved");


echo"<script>
            alert('Order Placed Successfully!!');
            window.location.href='../orderdetail.php';
          </script>";

 // $admin -> redirect('../firstproductpage');


 ?>

