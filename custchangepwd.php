<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>Au Register Forms by Colorlib</title>

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Change Password </h2>
                    <form action="" method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" required="" placeholder="New Password"
                                name="npwd">
                        </div>
                        <input type="hidden" name="email" value="<?= $_GET['email']?>">

                        <div class="input-group">
                            <input class="input--style-2" type="password" required="" placeholder="Confirm Password"
                                name="cpwd">
                        </div>


                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="login">Change</button>
                        </div>

                        <div class="btn btn--radius btn--red">
                            <a href="custreg.php">Create a account</a>
                        </div>
                        <div class="btn btn--radius btn--red">
                            <a href="custlogin.php">Login</a>
                        </div>
                    </form>

                    <?php

                        include "config.php";

                        if (isset($_POST['login'])) {
                           
                            $email=$_POST['email'];
                            $npwd=$_POST['npwd'];
                            $cpwd=$_POST['cpwd'];

                            if($npwd == $cpwd){
                                 $sname=mysqli_query($con,"UPDATE `customer` SET `password` = '$npwd' WHERE `customer`.`email` = '$email'");
                             echo "<script>alert('Password Changed Successfull.');window.location='custlogin.php';</script>";



                        }else{
                             echo "<script>alert('Password is Not Matched');window.location='custchangepwd.php?email=$email';</script>";


                    }

                        }

                    ?>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>
    <script src="js/global.js"></script>
</body>

</html>