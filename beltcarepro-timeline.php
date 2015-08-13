<!DOCTYPE html>
<html lang="en">
	<!--  -->
	<?php include "layout/head.php"; ?>

	<body class="page-body">

		<?php include "layout/header.php"; ?>

			<div class="page-container">
				<?php include "layout/menu.php"; ?>
				<div class="main-content">
					<?php include "layout/navbar.php"; ?>		
						<div class="page-title">
							<div class="title-env">
								<h1 class="title">Timeline</h1>
								<p class="description">Left aligned timeline stories</p>
							</div>
							<div class="breadcrumb-env">
								<ol class="breadcrumb bc-1">
									<li>
										<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
									</li>
									<li>
										<a href="extra-gallery.html">Extra</a>
									</li>
									<li class="active">
										<strong>Timeline</strong>
									</li>
								</ol>	
							</div>
						</div>

						<ul class="cbp_tmtimeline">
							<li>
								<time datetime="2014-12-06T18:30" class="cbp_tmtime"><span class="hidden">06/12/2014</span> <span class="large">Now</span></time>
								
								<div class="cbp_tmicon timeline-bg-gray">
									<i class="fa-user"></i>
								</div>
								
								<div class="cbp_tmlabel empty">
									<span>No Activity</span>
								</div>
							</li>
							
							<li>
								<time datetime="2014-12-06T03:45" class="cbp_tmtime"><span>03:45 AM</span> <span>Today</span></time>
								
								<div class="cbp_tmicon timeline-bg-success">
									<i class="fa-paper-plane-o"></i>
								</div>
								
								<div class="cbp_tmlabel">
									<h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
									<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
								</div>
							</li>
							
							<li>
								<time datetime="2014-12-05T13:22" class="cbp_tmtime"><span>01:22 PM</span> <span>Yesterday</span></time>
								
								<div class="cbp_tmicon timeline-bg-primary">
									<i class="fa-calendar"></i>
								</div>
								
								<div class="cbp_tmlabel">
									<h2><a href="#">Job Meeting</a></h2>
									<p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
								</div>
							</li>
							
							<li>
								<time datetime="2014-11-23T13:41" class="cbp_tmtime"><span>01:41 PM</span> <span>Two weeks ago</span></time>
								
								<div class="cbp_tmicon timeline-bg-warning">
									<i class="fa-camera-retro"></i>
								</div>
								
								<div class="cbp_tmlabel">
									<h2><a href="#">Eroll Maxhuni</a> <span>uploaded</span> 12 <span>new photos to album</span> <a href="#">Summer Trip</a></h2>
									
									<blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
									
									<div class="row">
										<div class="col-xs-5">
											<a href="#">
												<img class="img-responsive img-rounded full-width" src="assets/images/image-1.jpg">
											</a>
										</div>
										
										<div class="col-xs-3">
											<a href="#">
												<img class="img-responsive img-rounded full-width" src="assets/images/image-4.jpg">
											</a>
										</div>
										
										<div class="col-xs-4">
											
											<a href="#">
												<img class="img-responsive img-rounded full-width margin-bottom" src="assets/images/image-5.jpg">
											</a>
											
											<div class="vspacer v2"></div>
											
											<a href="#">
												<img class="img-responsive img-rounded full-width" src="assets/images/image-3.jpg">
											</a>
										</div>
									</div>
								</div>
							</li>
						</ul>

					<?php include "layout/header.php"; ?>
				</div>			
			</div>
		<?php include "layout/bottom.php"; ?>
	</body>
</html>