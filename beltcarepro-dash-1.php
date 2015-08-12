<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Xenon - Dashboard 4</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="extra-profile.html">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
		
			<div class="sidebar-menu-inner">
				
				<header class="logo-env">
		
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
		
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
		
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
		
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
		
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
		
					
				</header>
				
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<?php include_once 'beltcarepro-menu.inc'; ?>
				</ul>
				
			</div>
		
		</div>
	
		<div class="main-content">
					
			<nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->
			
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
			
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
			
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
			
						<ul class="dropdown-menu messages">
							<li>
								
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
							
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
							
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
							
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
							
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
							
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
							
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
							
									<!-- Repeated -->
							
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
							
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
							
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
							
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
							
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
							
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
							
								</ul>
							
							</li>
							
							<li class="external">
								<a href="mailbox-main.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
			
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
			
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
			
					<!-- Added in v1.2 -->
					<li class="dropdown hover-line language-switcher">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/flags/flag-uk.png" alt="flag-uk" />
							English
						</a>
			
						<ul class="dropdown-menu languages">
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-al.png" alt="flag-al" />
									Shqip
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="assets/images/flags/flag-uk.png" alt="flag-uk" />
									English
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-de.png" alt="flag-de" />
									Deutsch
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-fr.png" alt="flag-fr" />
									Fran&ccedil;ais
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-br.png" alt="flag-br" />
									Portugu&ecirc;s
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-es.png" alt="flag-es" />
									Espa&ntilde;ol
								</a>
							</li>
						</ul>
					</li>
			
				</ul>
			
			
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
							<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
			
						<form name="userinfo_search_form" method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
			
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
			
					</li>
			
					<li class="dropdown user-profile">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								John Smith
								<i class="fa-angle-down"></i>
							</span>
						</a>
			
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
			
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
			
				</ul>
			
			</nav>
			
			<div class="row">
				<script type="text/javascript">
					jQuery(function(){
						console.log('11111');
						jQuery('.beltcarepro-conv-dash-state').click(function(){
							window.location = 'beltcarepro-dash-1-detail.php';
						});
					});
				</script>
				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-counter xe-counter-red" data-count=".num" data-from="0" data-to="85.3" data-suffix="%" data-duration="2">
						<div class="xe-icon">
							<i class="linecons-fire"></i>
						</div>
						<div class="xe-label">
							<strong class="num">0.0%</strong>
							<span>Conveyor Runs</span>
						</div>
					</div>
					
				</div>



				<!-- START -->
				<div class="col-sm-3">
					
					<div class="xe-widget xe-counter xe-counter-blue" data-count=".num" data-from="1" data-to="15" data-suffix="Unit(s)" data-duration="3" data-easing="false">
						<div class="xe-icon">
							<i class="linecons-user"></i>
						</div>
						<div class="xe-label">
							<strong class="num">1 Unit</strong>
							<span>Conveyor(s) Covered</span>
						</div>
					</div>
				
				</div>
				
				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-from="0" data-to="100" data-duration="4" data-suffix="%" data-easing="true">
						<div class="xe-icon">
							<i class="linecons-camera"></i>
						</div>
						<div class="xe-label">
							<strong class="num">100</strong>
							<span>Task Closed</span>
						</div>
					</div>
				
				</div>
				
				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-counter xe-counter-red"  data-count=".num" data-from="0" data-to="57" data-prefix="-," data-suffix="%" data-duration="5" data-easing="true" data-delay="1">
						<div class="xe-icon">
							<i class="linecons-lightbulb"></i>
						</div>
						<div class="xe-label">
							<strong class="num">-,0%</strong>
							<span>Exchange Commission</span>
						</div>
					</div>
				
				</div>


				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C21</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>


				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-green"  data-count=".num" data-from="0" data-to="93.7" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C22</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="93.2" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>


				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-orange"  data-count=".num" data-from="0" data-to="75.3" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C23</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="75.3" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-yellow"  data-count=".num" data-from="0" data-to="69.9" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C24</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="69.9" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-red"  data-count=".num" data-from="0" data-to="55.2" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C25</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="55.2" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>


				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-red"  data-count=".num" data-from="0" data-to="40.3" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C26</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="40.3" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-orange"  data-count=".num" data-from="0" data-to="75.1" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C27</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="75.1" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>


				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="99.8" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C28</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="99.8" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>


				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-yellow"  data-count=".num" data-from="0" data-to="70.1" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C29</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="70.1" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C30</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C31</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C32</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C33</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C34</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<div class="beltcarepro-conv-dash-state col-sm-3">
					
					<div class="xe-widget xe-progress-counter xe-progress-counter-turquoise"  data-count=".num" data-from="0" data-to="100" data-suffix="%" data-duration="3">
						
						<div class="xe-background">
							<i class="linecons-paper-plane"></i>
						</div>
						
						<div class="xe-upper">
							<div class="xe-icon">
								<i class="fa-spin fa-cog"></i>
							</div>
							<div class="xe-label">
								<span>C35</span>
								<strong class="num">0</strong>
							</div>
						</div>
						
						<div class="xe-progress">
							<span class="xe-progress-fill"  data-fill-from="0" data-fill-to="100" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
						</div>
						
						<div class="xe-lower">
							<span>Chat lines p/ Month</span>
							<strong>82% more communication</strong>
						</div>
						
					</div>
				</div>

				<!-- END -->
				
				
				
				<div class="clearfix"></div>
			
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2014 
						<strong>Xenon</strong> 
						theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">Purchase for only <strong>23$</strong></a>
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
	
			
		<div id="chat" class="fixed"><!-- start: Chat Section -->
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a  href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		<!-- end: Chat Section -->
		</div>
	
	</div>
	
	<div class="footer-sticked-chat"><!-- Start: Footer Sticked Chat -->
	
			<script type="text/javascript">
		function toggleSampleChatWindow()
		{
			var $chat_win = jQuery("#sample-chat-window");
	
			$chat_win.toggleClass('open');
	
			if($chat_win.hasClass('open'))
			{
				var $messages = $chat_win.find('.ps-scrollbar');
	
				if($.isFunction($.fn.perfectScrollbar))
				{
					$messages.perfectScrollbar('destroy');
	
					setTimeout(function(){
						$messages.perfectScrollbar();
						$chat_win.find('.form-control').focus();
					}, 300);
				}
			}
	
			jQuery("#sample-chat-window form").on('submit', function(ev)
			{
				ev.preventDefault();
			});
		}
	
		jQuery(document).ready(function($)
		{
			$(".footer-sticked-chat .chat-user, .other-conversations-list a").on('click', function(ev)
			{
				ev.preventDefault();
				toggleSampleChatWindow();
			});
	
			$(".mobile-chat-toggle").on('click', function(ev)
			{
				ev.preventDefault();
	
				$(".footer-sticked-chat").toggleClass('mobile-is-visible');
			});
		});
		</script>
		
		<ul class="chat-conversations list-unstyled">
	
			<!-- Extra Chat Conversations collected not to exceed window width -->
			<li class="browse-more">
				<a href="#" class="chat-user">
					<i class="linecons-comment"></i>
					<span>3</span>
				</a>
	
				<!-- These conversations are hidden in screen -->
				<ul class="other-conversations-list">
					<li>
						<!-- Minimal User Info Link -->
						<a href="#" >
							Catherine J. Watkins
							<span>&times;</span>
						</a>
					</li>
					<li>
						<!-- Minimal User Info Link -->
						<a href="#" >
							Nicholas R. Walker
							<span>&times;</span>
						</a>
					</li>
					<li>
						<!-- Minimal User Info Link -->
						<a href="#" >
							Susan J. Best
							<span>&times;</span>
						</a>
					</li>
				</ul>
			</li>
	
			<li id="sample-chat-window">
				<!-- User Info Link -->
				<a href="#"  class="chat-user">
					<span class="user-status is-online"></span>
					Art Ramadani
				</a>
	
				<span class="badge badge-purple">4</span>
	
				<!-- Conversation Window -->
				<div class="conversation-window">
					<!-- User Info Link in header (used to close the chat bar) -->
					<a href="#"  class="chat-user">
						<span class="close">&times;</span>
	
						<span class="user-status is-online"></span>
						Art Ramadani
					</a>
	
					<ul class="conversation-messages ps-scrollbar ps-scroll-down">
	
						<!-- Will indicate time -->
						<li class="time">Thursday 04, December '14</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Hello John, how are you?</p>
							</div>
						</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Hi Art, I am fine :) How about you?</p>
							</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Warmth his law design say are person. Pronounce suspected in belonging conveying ye repulsive.</p>
							</div>
						</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper.</p>
								<p>Timed voice share led his widen noisy young.</p>
								<p>His six detract besides add moonlight newspaper.</p>
							</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Hello John, how are you?</p>
							</div>
						</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Hi Art, I am fine :) How about you?</p>
							</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Hello John, how are you?</p>
							</div>
						</li>
	
						<!-- Will indicate time -->
						<li class="time">Today 17:12</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Hi Art, I am fine :) How about you?</p>
	
														</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
					</ul>
	
					<form method="post" class="chat-form">
						<input type="text" class="form-control"  placeholder="Enter your message..." />
					</form>
				</div>
			</li>
	
			<li>
				<!-- User Info Link -->
				<a href="#"  class="chat-user">
					<span class="user-status is-idle"></span>
					Ylli Pylla
				</a>
			</li>
	
			<li>
				<!-- User Info Link -->
				<a href="#"  class="chat-user">
					<span class="user-status is-busy"></span>
					Arlind Nushi
				</a>
			</li>
	
		</ul>
	
		<a href="#" class="mobile-chat-toggle">
			<i class="linecons-comment"></i>
			<span class="num">6</span>
			<span class="badge badge-purple">4</span>
		</a>
	
	<!-- End: Footer Sticked Chat -->
	</div>
	
	




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/css/fonts/meteocons/css/meteocons.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/jvectormap/regions/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/js/xenon-widgets.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>