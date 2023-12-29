<?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['submit']))
{
  $a=$_POST['con'];
  $stmt=$admin -> cud("INSERT INTO `addcatcon` (condname) VALUES ('$a')","saved");
  echo"<script>
            alert('Main Category added successfully ');
            window.location.href='../addcatcon.php';
          </script>";
 }


//delete
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addcatcon` WHERE catcon_id='$id'","deleted");
  echo"<script>
            alert('Main Category deleted successfully');
            window.location.href='../viewcat.php';
          </script>";
}



//update
if(isset($_POST['updates']))
{
    $a=$_POST['cat'];
    $id=$_POST['id'];
    $stmt=$admin -> cud("UPDATE `addcatcon` SET `condname`='$a' WHERE `catcon_id`='$id'","updated");
    echo"<script>
            alert('Main Category updated successfully');
            window.location.href='../viewcat.php';
          </script>";
 } 

?>