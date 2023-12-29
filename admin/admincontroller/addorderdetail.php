<?php
define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['submit']))
{
 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];
    $i = $_POST['i'];
    $j = $_POST['j'];
    $k = $_POST['k'];
    $l = $_POST['l'];
    $dl = $_POST['dl'];
    $m = $_POST['m'];


    $stmt = $admin -> cud("INSERT INTO `addorderdetail` ( `name`, `address`, `state`, `pin`, `bdate`, `ddate`, `status`, `u_id`, `or_id`, `paymode`, `tamount`,`phno`,`dboy`) VALUES ('".$a."','".$b."','".$c."','".$d."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$dl."')","saved");
   echo"<script>
            alert('Shipment sent sucessfully');
            window.location.href='../vieworderpay.php';
          </script>";
}


//update
if(isset($_POST['update']))
{ 
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];
    $id = $_POST['i'];
    $stmt=$admin -> cud("UPDATE `addorderdetail` SET  `bdate`='$f', `ddate`='$g', `status`='$h' WHERE `ao_id`='$id'","updated");
    
    echo"<script>
            alert('Delivery details Updated');
            window.location.href='../sendorderstatus.php';
          </script>";
 } 


//delete
if(isset($_GET['id']))
{
  
    $id=$_GET['id'];
    $stmt=$admin -> cud("DELETE FROM `addorderdetail` WHERE `ao_id`='$id'","deleted");
    echo"<script>
            alert('Delivery Cancelled Successfully');
            window.location.href='../sendorderstatus.php';
          </script>";
}

?>