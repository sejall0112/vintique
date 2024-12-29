<body id="about-us" class="blog"></body>
<?php
include 'header.php';

$sql = "SELECT * FROM about_us";
$result = $connect->query($sql);
$row = $result->fetch_assoc();
?>		
		<!-- main content -->
		<div class="main-content">
			<div id="wrapper-site">
				<div id="content-wrapper">
					<div id="main">
						<div class="page-home">
							<div class="container">
								<div class="about-us-content">
									<h1 class="title-page">About Us</h1>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 right">
											<a href="#">
												<img style="height:500px;width:500px;"class="img-fluid" src="img/other/1.jpeg" alt="#" />
											</a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 left">
											<div class="cms-block f-right">
												<h3 class="page-subheading"><?php echo $row['Heading_1'];?></h3>
												<p><?php echo $row['About_1'];?></p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 right">
											<div class="cms-block f-left">
											<h3 class="page-subheading"><?php echo $row['Heading_2'];?></h3>
											<p><?php echo $row['About_2'];?></p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 left">
											<a href="#">
												<img style="height:500px;width:500px;"class="img-fluid" src="img/other/2.jpeg" alt="#" />
											</a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 right">
											<a href="#">
												<img style="height:500px;width:500px;"class="img-fluid" src="img/other/3.jpeg" alt="#" />
											</a>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 left">
											<div class="cms-block f-right">
											<h3 class="page-subheading"><?php echo $row['Heading_3'];?></h3>
											<p><?php echo $row['About_3'];?></p>
											</div>
												<div class="social-content">
													<div class="social">
														<ul class="list-inline mb-0 justify-content-end">
															<li class="list-inline-item mb-0">
																<a href="#" target="_blank">
																	<i class="fa fa-facebook"></i>
																</a>
															</li>
															<li class="list-inline-item mb-0">
																<a href="#" target="_blank">
																	<i class="fa fa-twitter"></i>
																</a>
															</li>
															<li class="list-inline-item mb-0">
																<a href="#" target="_blank">
																	<i class="fa fa-google"></i>
																</a>
															</li>
															<li class="list-inline-item mb-0">
																<a href="#" target="_blank">
																	<i class="fa fa-instagram"></i>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
include 'footer.php';
?>
</body>