<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();

if (!isset($_SESSION["a_id"])) {
       header("location:adminlogin.php");
}

?>


<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | shopkeeper</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->

		<?php include "header.php" ?>
       
		<!-- END NAVBAR till 106-->



		<!-- LEFT SIDEBAR -->
		
        <?php include "sidebar.php" ?>
        
		
		<!-- END LEFT SIDEBAR -->


		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT --><br>
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->

					<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">View Product Details</h3>
								</div>
								<div class="panel-body">
									<table class="table table-hover table-dark">
										<thead>
											<tr>
												<th>Product_id</th>
												<th>Product name</th>
												<th>Catagory Name</th>
												<th>Price</th>
												<th>Discount</th>
												<th>Quantity</th>
												<th>Description</th>
												<th>Product Image</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											<?php


                                   $stmtss=$admin -> ret("SELECT * FROM `addproduct`");

                                   while($rowss=$stmtss->fetch(PDO::FETCH_ASSOC))
   
                                   {
                                         ?>
											<tr>
												 
												  <td><?= $rowss['b_id']; ?></td>
												  <td><?= $rowss['name']; ?></td>
												  <td><?= $rowss['condname']; ?></td>
												  <td><?= $rowss['price']; ?></td>
												  <td><?= $rowss['discount']; ?></td>
												  <td><?= $rowss['quantity']; ?></td>
												   <td><?= $rowss['description']; ?></td>
												   <td><img src="admincontroller/<?= $rowss['image']; ?>" height="100" width="100"></td>

												    <td><a href="addproductupdate.php?id=<?= $rowss['b_id']; ?>" class="btn btn-primary" onclick="return confirm('Are you sure want to edit?')"><b><i>Update</i></b></a></td>

												    <td><a href="admincontroller/addproduct.php?id=<?= $rowss['b_id']; ?>" class="btn btn-primary" onclick="return confirm('Are you sure want to delete?')"><b><i>Delete</i></b></a></td>
                          
											</tr>

										<?php } ?>
											
										</tbody>
									</table>
								</div>
							</div>
					
					<!-- END OVERVIEW -->
					
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		
        <?php include "footer.php" ?>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
