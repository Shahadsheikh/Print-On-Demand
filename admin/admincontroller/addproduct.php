<?php

define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['add']))
{

    $a = $_POST['name'];
    $b = $_POST['title'];
    $c = $_POST['title_cond'];
    $f = $_POST['price'] ;
    $g = $_POST['discount'] ;
    $h = $_POST['quantity'];
    $i = $_POST['text'];


  $targetDir = "upload/";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);


    $stmt = $admin -> cud("INSERT INTO `addproduct` ( `name`,  `cname`, `condname`,`price`, `discount`, `quantity`, `description`, `image`) VALUES ('".$a."','".$b."','".$c."','".$f."','".$g."','".$h."','".$i."','".$image."')","saved");
    echo"<script>
            alert('Product Added Successfully');
            window.location.href='../addproduct.php';
          </script>";    //add
}

//delete
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addproduct` WHERE b_id='$id'","deleted");
    echo"<script>
            alert('Product Deleted Successfully');
            window.location.href='../viewproduct.php';
          </script>";
}


//update
if(isset($_POST['update']))
{
    $a = $_POST['name'];
    $b = $_POST['title'];
    $c = $_POST['title_cond'];
    $f = $_POST['price'];
    $g = $_POST['discount'];
    $h = $_POST['quantity'];
    $i = $_POST['text'];
    $id = $_POST['id'];


  $targetDir = "upload/";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);

    $stmt=$admin -> cud("UPDATE `addproduct` SET `name`='$a',`cname`='$b',`condname`='$c',`price`='$f',`discount`='$g',`quantity`='$h',`description`='$i',`image`='$image' WHERE `b_id`='$id'","updated");

   
    echo"<script>
            alert('Product Updated Successfully');
            window.location.href='../viewproduct.php';
          </script>";   
}

?>