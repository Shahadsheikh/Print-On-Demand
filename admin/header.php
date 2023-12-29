<nav class="navbar navbar-default navbar-fixed-top" style="background-color:lightblue;" >
			<div class="brand" style="background-color:lightblue;" >
				<p style="font-size: 20px;color:#ce3434 ;"><img src="assets/img/dop.png" height="50" width="230"></img></p>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<form class="navbar-form navbar-left">
					
				</form>
				

				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">

					   <?php 

                        $stmt=$admin -> ret("SELECT * FROM admin");
                        $row=$stmt->fetch(PDO::FETCH_ASSOC);

                        ?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/ad2.jpg" class="img-circle" alt="Avatar" height="50" width="50"> <span><?php echo $row['email'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>