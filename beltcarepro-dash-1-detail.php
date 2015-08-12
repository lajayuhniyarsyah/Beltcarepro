<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Beltcarepro 4" />
	<meta name="author" content="" />

	<title>Xenon - Dashboard</title>

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
			
			<div class="dx-warning hidden">
				<div>
					<h2>How to Include Charts Library in Xenon Theme</h2>
			
					<p>The reason why you don't see charts like in the Xenon demo website is because of license restrictions from DevExpress company. <a href="http://js.devexpress.com/DevExtremeWeb/?folder=EULAs" target="_blank">Click here</a> to read license agreement.</p>
					<p>Even that we have purchased the developer license we are not permitted to include the DevExtreme Web Charts JavaScript library in the default download file of Xenon theme, however you can include DevExpress Charts library manually and takes just few minutes:</p>
			
					<ol>
						<li>Download <strong>DevExtreme Web</strong> JavaScript library by clicking <a href="https://go.devexpress.com/DevExpressDownload_DevExtremeWebTrial.aspx" class="text-bold">here</a>. If the link doesn't work, then <a href="http://js.devexpress.com/Buy/" target="_parent"><strong>click this one</strong></a> and choose DevExtreme Web package to download.</li>
						<li>Extract the downloaded archive. There you will find <strong>Lib/</strong> folder. <strong>Copy</strong> the folders inside.</li>
						<li><strong>Paste</strong> copied files to <strong>assets/js/devexpress-web-14.1/</strong></li>
						<li>You are all set! Charts will look the same just like in the demo website.</li>
					</ol>
				</div>
			</div>
			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					if( ! $.isFunction($.fn.dxChart))
						$(".dx-warning").removeClass('hidden');
				});
			</script>

			
			<script type="text/javascript">
				var sample_notification;
				
					jQuery(document).ready(function($)
					{	
							
					// Notifications
					window.clearTimeout(sample_notification);
					
					var notification = setTimeout(function()
					{			
						var opts = {
							"closeButton": true,
							"debug": false,
							"positionClass": "toast-top-right toast-default",
							"toastClass": "black",
							"onclick": null,
							"showDuration": "100",
							"hideDuration": "1000",
							"timeOut": "5000",
							"extendedTimeOut": "1000",
							"showEasing": "swing",
							"hideEasing": "linear",
							"showMethod": "fadeIn",
							"hideMethod": "fadeOut"
						};
				
						toastr.info("Enjoy the varieties of layouts, UI features and flexibility of clean coding.", "Welcome to Xenon Admin Theme", opts);
					}, 3800);
					
					if( ! $.isFunction($.fn.dxChart))
						return;
					
					// Charts
					var xenonPalette = ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'];
					
					// Pageviews Visitors Chart
					var i = 0,
						line_chart_data_source = [
						{ id: ++i, part1: 4, part2: 2 },
						{ id: ++i, part1: 5, part2: 3 },
						{ id: ++i, part1: 5, part2: 3 },
						{ id: ++i, part1: 4, part2: 2 },
						{ id: ++i, part1: 3, part2: 1 },
						{ id: ++i, part1: 3, part2: 2 },
						{ id: ++i, part1: 5, part2: 3 },
						{ id: ++i, part1: 7, part2: 4 },
						{ id: ++i, part1: 9, part2: 5 },
						{ id: ++i, part1: 7, part2: 4 },
						{ id: ++i, part1: 7, part2: 3 },
						{ id: ++i, part1: 11, part2: 6 },
						{ id: ++i, part1: 10, part2: 8 },
						{ id: ++i, part1: 9, part2: 7 },
						{ id: ++i, part1: 8, part2: 7 },
						{ id: ++i, part1: 8, part2: 7 },
						{ id: ++i, part1: 8, part2: 7 },
						{ id: ++i, part1: 8, part2: 6 },
						{ id: ++i, part1: 15, part2: 5 },
						{ id: ++i, part1: 10, part2: 5 },
						{ id: ++i, part1: 9, part2: 6 },
						{ id: ++i, part1: 9, part2: 3 },
						{ id: ++i, part1: 8, part2: 5 },
						{ id: ++i, part1: 8, part2: 4 },
						{ id: ++i, part1: 9, part2: 5 },
						{ id: ++i, part1: 8, part2: 6 },
						{ id: ++i, part1: 8, part2: 5 },
						{ id: ++i, part1: 7, part2: 6 },
						{ id: ++i, part1: 7, part2: 5 },
						{ id: ++i, part1: 6, part2: 5 },
						{ id: ++i, part1: 7, part2: 6 },
						{ id: ++i, part1: 7, part2: 5 },
						{ id: ++i, part1: 8, part2: 5 },
						{ id: ++i, part1: 6, part2: 5 },
						{ id: ++i, part1: 5, part2: 4 },
						{ id: ++i, part1: 5, part2: 3 },
						{ id: ++i, part1: 6, part2: 3 },
					];
					
					$("#pageviews-visitors-chart").dxChart({
						dataSource: line_chart_data_source,
						commonSeriesSettings: {
							argumentField: "id",
							point: { visible: true, size: 5, hoverStyle: {size: 7, border: 0, color: 'inherit'} },
							line: {width: 1, hoverStyle: {width: 1}}
						},
						series: [
							{ valueField: "part1", name: "Pageviews", color: "#68b828" },
							{ valueField: "part2", name: "Visitors", color: "#eeeeee" },
						],
						legend: {
							position: 'inside',
							paddingLeftRight: 5
						},
						commonAxisSettings: {
							label: {
								visible: false
							},
							grid: {
								visible: true,
								color: '#f9f9f9'
							}
						},
						valueAxis: {
							max: 25
						},
						argumentAxis: {
					        valueMarginsEnabled: false
					    },
					});
					
					
					
					// Server Uptime Chart
					var bar1_data_source = [
						{ year: 1, 	europe: 10, americas: 0, africa: 5 },
						{ year: 2, 	europe: 20, americas: 5, africa: 15 },
						{ year: 3, 	europe: 30, americas: 10, africa: 15 },
						{ year: 4, 	europe: 40, americas: 15, africa: 30 },
						{ year: 5, 	europe: 30, americas: 10, africa: 20 },
						{ year: 6, 	europe: 20, americas: 5,  africa: 10 },
						{ year: 7, 	europe: 10, americas: 15, africa: 0 },
						{ year: 8, 	europe: 20, americas: 25, africa: 8 },
						{ year: 9, 	europe: 30, americas: 35, africa: 16 },
						{ year: 10,	europe: 40, americas: 45, africa: 24 },
						{ year: 11,	europe: 50, americas: 40, africa: 32 },
					];
					
					$("#server-uptime-chart").dxChart({
						dataSource: [
							{id: ++i, 	sales: 1},
							{id: ++i, 	sales: 2},
							{id: ++i, 	sales: 3},
							{id: ++i, 	sales: 4},
							{id: ++i, 	sales: 5},
							{id: ++i, 	sales: 4},
							{id: ++i, 	sales: 5},
							{id: ++i, 	sales: 6},
							{id: ++i, 	sales: 7},
							{id: ++i, 	sales: 6},
							{id: ++i, 	sales: 5},
							{id: ++i, 	sales: 4},
							{id: ++i, 	sales: 5},
							{id: ++i, 	sales: 4},
							{id: ++i, 	sales: 4},
							{id: ++i, 	sales: 3},
							{id: ++i, 	sales: 4},
						],
					 
						series: {
							argumentField: "id",
							valueField: "sales",
							name: "Sales",
							type: "bar",
							color: '#7c38bc'
						},
						commonAxisSettings: {
							label: {
								visible: false
							},
							grid: {
								visible: false
							}
						},
						legend: {
							visible: false
						},
						argumentAxis: {
					        valueMarginsEnabled: true
					    },
						valueAxis: {
							max: 12
						},
						equalBarWidth: {
							width: 11
						}
					});
					
					
					
					// Average Sales Chart
					var doughnut1_data_source = [
						{region: "Running Well", val: 11.2},
						{region: "Problem Lvl 1", val: 20.2},
						{region: "Problem Lvl 2", val: 6.6},
						{region: "Problem Lvl 3", val: 0.7},
						{region: "Problem Lvl 4", val: 35.4},
					], timer;
					
					$("#sales-avg-chart div").dxPieChart({
						dataSource: doughnut1_data_source,
						tooltip: {
							enabled: false,
						  	format:"millions",
							/*customizeText: function() { 
								return this.argumentText + "<br/>" + this.valueText;
							}*/
						},
						size: {
							height: 190
						},
						legend: {
							visible: true
						},  
						series: [{
							type: "doughnut",
							argumentField: "region"
						}],
						palette: ['#00b19d', '#68b828', '#f7aa47', '#fcd036', '#D5080F'],
					});
					
					
					
					// Pageview Stats
					$('#pageviews-stats').dxBarGauge({
						/*startValue: -50,
						endValue: 50,*/
						baseValue: 0,
						values: [55.2,12.1,5.6,27.1],
						label: {
							customizeText: function (arg) {
								return arg.valueText + '%';
							}
						},
						//palette: 'ocean',
						palette: ['#68b828','#7c38bc','#0e62c7','#fcd036','#4fcdfc','#00b19d','#ff6264','#f7aa47'],
						margin : {
							top: 0
						}
					});
					
					
					
					
					// Realtime Network Stats
					var i = 0,
						rns_values = [130,150],
						rns2_values = [39,50],
						realtime_network_stats = [];
					
					for(i=0; i<=100; i++)
					{
						realtime_network_stats.push({ id: i, x1: between(rns_values[0], rns_values[1]), x2: between(rns2_values[0], rns2_values[1])});
					}
					
					$("#realtime-network-stats").dxChart({
						dataSource: realtime_network_stats,
						commonSeriesSettings: {
							type: "area",
							argumentField: "id"
						},
						series: [
							{ valueField: "x1", name: "Packets Sent", color: '#7c38bc', opacity: .4 },
							{ valueField: "x2", name: "Packets Received", color: '#000', opacity: .5},
						],
						legend: {
							verticalAlignment: "bottom",
							horizontalAlignment: "center"
						},
						commonAxisSettings: {
							label: {
								visible: false
							},
							grid: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						legend: {
							visible: false
						},
						argumentAxis: {
					        valueMarginsEnabled: false
					    },
						valueAxis: {
							max: 500
						},
						animation: {
							enabled: false
						}
					}).data('iCount', i);
			
					$('#network-realtime-gauge').dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 200,
							majorTick: {
								tickInterval: 50
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{ startValue: 0, endValue: 50, color: "#7c38bc" },
								{ startValue: 50, endValue: 100, color: "#7c38bc" },
								{ startValue: 100, endValue: 150, color: "#7c38bc" },
								{ startValue: 150, endValue: 200, color: "#7c38bc" },
							],
						},
						value: 140,
						valueIndicator: {
							offset: 10,
							color: '#7c38bc',
							type: 'triangleNeedle',
							spindleSize: 12
						}
					});
					
					setInterval(function(){  networkRealtimeChartTick(rns_values, rns2_values); }, 1000);
					setInterval(function(){ networkRealtimeGaugeTick(); }, 2000);
					setInterval(function(){ networkRealtimeMBupdate(); }, 3000);
					
					
					
					// CPU Usage Gauge
					$("#cpu-usage-gauge").dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 100,
							majorTick: {
								tickInterval: 25
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{ startValue: 0, endValue: 25, color: "#68b828" },
								{ startValue: 25, endValue: 50, color: "#68b828" },
								{ startValue: 50, endValue: 75, color: "#68b828" },
								{ startValue: 75, endValue: 100, color: "#d5080f" },
							],
						},
						value: between(30, 90),
						valueIndicator: {
							offset: 10,
							color: '#68b828',
							type: 'rectangleNeedle',
							spindleSize: 12
						}
					});
					
					
					// Resize charts
					$(window).on('xenon.resize', function()
					{
						$("#pageviews-visitors-chart").data("dxChart").render();
						$("#server-uptime-chart").data("dxChart").render();
						$("#realtime-network-stats").data("dxChart").render();
						
						$('.first-month').data("dxSparkline").render();
						$('.second-month').data("dxSparkline").render();
						$('.third-month').data("dxSparkline").render();
					});
					
				});
				
				function networkRealtimeChartTick(min_max, min_max2)
				{
					var $ = jQuery,
						i = 0;
					
					if( $('#realtime-network-stats').length == 0 )
						return;
					
					var chart_data = $('#realtime-network-stats').dxChart('instance').option('dataSource');
					
					var count = $('#realtime-network-stats').data('iCount');
					
					$('#realtime-network-stats').data('iCount', count + 1);
					
					chart_data.shift();
					chart_data.push({id: count + 1, x1: between(min_max[0],min_max[1]), x2: between(min_max2[0],min_max2[1])});
					
					$('#realtime-network-stats').dxChart('instance').option('dataSource', chart_data);
				}
				
				function networkRealtimeGaugeTick()
				{
					if(jQuery('#network-realtime-gauge').length == 0)
						return;
						
					var nr_gauge = jQuery('#network-realtime-gauge').dxCircularGauge('instance');
					
					nr_gauge.value( between(50,200) );
				}
				
				function networkRealtimeMBupdate()
				{
					var $el = jQuery("#network-mbs-packets");
					
					if($el.length == 0)
						return;
					
					var options = {
							useEasing : true, 
							useGrouping : true, 
							separator : ',', 
							decimal : '.', 
							prefix : '' ,
							suffix : 'mb/s' 
						},
						cntr = new countUp($el[0], parseFloat($el.text().replace('mb/s')), parseFloat(between(10,25) + 1/between(15,30)), 2, 1.5, options);
						
					cntr.start();
				}
				
				function between(randNumMin, randNumMax)
				{
					var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);
					
					return randInt;
				}
			</script>
			
			<div class="row">
				<div class="col-sm-3">
					
					<div class="xe-widget xe-counter" data-count=".num" data-from="0" data-to="55.2" data-suffix="%" data-duration="2">
						<div class="xe-icon">
							<i class="linecons-cloud"></i>
						</div>
						<div class="xe-label">
							<strong class="num">0.0%</strong>
							<span>C25</span>
						</div>
					</div>
					
					<!-- <div class="xe-widget xe-counter xe-counter-info" data-count=".num" data-suffix="times" data-from="1" data-to="27" data-duration="4" data-easing="true">
						<div class="xe-icon">
							<i class="linecons-camera"></i>
						</div>
						<div class="xe-label">
							<strong class="num">27</strong>
							<span>Action on this Conveyor in within Last 3 Months</span>
						</div>
					</div> -->



					<div class="xe-widget xe-counter-block xe-counter-block-purple"  data-count=".num" data-from="0" data-to="31" data-duration="3">
						<div class="xe-upper">
							
							<div class="xe-icon">
								<i class="linecons-attach"></i>
							</div>
							<div class="xe-label">
								<strong class="num">0</strong>
								<span>Actions in Last 3 Months</span>
							</div>
							
						</div>
						<div class="xe-lower">
							<div class="border"></div>
							
							<span>20 Preventive</span>
							<span>3 Predictive</span>

							<span>8 Corrective</span>
						</div>
					</div>
					
				</div>
				<!-- <div class="col-sm-6">
					
					<div class="chart-item-bg">
						<div class="chart-label">
							<div class="h3 text-secondary text-bold"  data-count="this" data-from="0.00" data-to="14.85" data-suffix="%" data-duration="1">0.00%</div>
							<span class="text-medium text-muted">More visitors</span>
						</div>
						<div id="pageviews-visitors-chart" style="height: 298px;"></div>
					</div>
					
				</div> -->
				<div class="col-sm-6">
					
					<!-- <div class="chart-item-bg">
						<div id="pageviews-stats" style="height: 320px; padding: 20px 0;"></div>
					</div> -->

					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-secondary text-bold"  data-count="this" data-from="0.00" data-to="320.45" data-decimal="," data-duration="2">0</div>
							<span class="text-small text-upper text-muted">Avg. of Sales</span>
						</div>
						<div id="sales-avg-chart" style="height: 230px; position: relative;">
							<div style="position: absolute; top: 25px; right: 0; left: 20%; bottom: 0"></div>
						</div>
					</div>
					
				</div>
				<div class="col-sm-3">
				
					<div class="xe-widget xe-counter-block xe-counter-block-yellow"  data-count=".num" data-from="0" data-to="1254" data-duration="3">
						<div class="xe-upper">
							
							<div class="xe-icon">
								<i class="linecons-attach"></i>
							</div>
							<div class="xe-label">
								<strong class="num">0</strong>
								<span>Hours Uptime</span>
							</div>
							
						</div>
						<div class="xe-lower">
							<div class="border"></div>
							
							<span>Last Shutdown</span>
							<strong>27/01/2015</strong>
						</div>
					</div>
					
				</div>
			</div>
			

			
			<div class="row" id="rowPartStatus">
				<script type="text/javascript">
					jQuery(document).ready(function($){
						var ds_part = [
							{region: "Running Well", val: 11.2},
							{region: "Problem Lvl 1", val: 20.2},
							{region: "Problem Lvl 2", val: 6.6},
							{region: "Problem Lvl 3", val: 0.7},
							{region: "Problem Lvl 4", val: 35.4},
						], timer;
						
						$("#splice-belt-status-chart div").dxPieChart({
							dataSource: ds_part,
							tooltip: {
								enabled: true,
							  	format:"millions",
								customizeText: function() { 
									return this.argumentText + "<br/>" + this.valueText;
								}
							},
							size: {
								height: 190
							},
							legend: {
								visible: false
							},  
							series: [{
								type: "doughnut",
								argumentField: "region"
							}],
							palette: ['#00b19d', '#68b828', '#f7aa47', '#fcd036', '#D5080F'],
						});

						$("#roller-status-chart div").dxPieChart({
							dataSource: [
								{region: "Running Well", val: 10},
								{region: "Problem Lvl 1", val: 30},
								{region: "Problem Lvl 2", val: 21},
								{region: "Problem Lvl 3", val: 3},
								{region: "Problem Lvl 4", val: 2},
							],
							tooltip: {
								enabled: false,
							  	format:"millions",
								/*customizeText: function() { 
									return this.argumentText + "<br/>" + this.valueText;
								}*/
							},
							size: {
								height: 190
							},
							legend: {
								visible: false
							},  
							series: [{
								type: "doughnut",
								argumentField: "region"
							}],
							palette: ['#00b19d', '#68b828', '#f7aa47', '#fcd036', '#D5080F'],
						});

						$("#motors-status-chart div").dxPieChart({
							dataSource: [
								{region: "Running Well", val: 1},
								{region: "Problem Lvl 1", val: 0},
								{region: "Problem Lvl 2", val: 0},
								{region: "Problem Lvl 3", val: 0},
								{region: "Problem Lvl 4", val: 0},
							],
							tooltip: {
								enabled: false,
							  	format:"millions",
								/*customizeText: function() { 
									return this.argumentText + "<br/>" + this.valueText;
								}*/
							},
							size: {
								height: 190
							},
							legend: {
								visible: false
							},  
							series: [{
								type: "doughnut",
								argumentField: "region"
							}],
							palette: ['#00b19d', '#68b828', '#f7aa47', '#fcd036', '#D5080F'],
						});

						$("#pulley-status-chart div").dxPieChart({
							dataSource: [
								{region: "Running Well", val: 2},
								{region: "Problem Lvl 1", val: 3},
								{region: "Problem Lvl 2", val: 4},
								{region: "Problem Lvl 3", val: 3},
								{region: "Problem Lvl 4", val: 1},
							],
							tooltip: {
								enabled: false,
							  	format:"millions",
								/*customizeText: function() { 
									return this.argumentText + "<br/>" + this.valueText;
								}*/
							},
							size: {
								height: 190
							},
							legend: {
								visible: false
							},  
							series: [{
								type: "doughnut",
								argumentField: "region"
							}],
							palette: ['#00b19d', '#68b828', '#f7aa47', '#fcd036', '#D5080F'],
						});

						$("#cleaners-status-chart div").dxPieChart({
							dataSource: [
								{region: "Running Well", val: 1},
								{region: "Problem Lvl 1", val: 1},
								{region: "Problem Lvl 2", val: 0},
								{region: "Problem Lvl 3", val: 0},
								{region: "Problem Lvl 4", val: 0},
							],
							tooltip: {
								enabled: true,
							  	format:"millions",
								/*customizeText: function() { 
									return this.argumentText + "<br/>" + this.valueText;
								}*/
							},
							size: {
								height: 190
							},
							legend: {
								visible: false
							},  
							series: [{
								type: "doughnut",
								argumentField: "region"
							}],
							palette: ['#00b19d', '#68b828', '#f7aa47', '#fcd036', '#D5080F'],
						});

					});
				</script>

				<div class="col-sm-3">
					<div class="chart-item-bg">
						<div class="chart-label chart-label-small">
							<div class="h4 text-secondary text-bold"  data-count="this" data-from="0.00" data-to="320.45" data-decimal="," data-duration="2">0</div>
							<span class="text-small text-upper text-muted">Splice Belt</span>
						</div>
						<div id="splice-belt-status-chart" style="height: 230px; position: relative;">
							<div></div>
						</div>
					</div>
				</div>


				<!-- <div class="col-sm-3">
					<div id="splice-belt-status-chart">
						<div style=""></div>
					</div>
				</div> -->

				<div class="col-sm-3">
					<div class="panel panel-color panel-warning"><!-- Add class "collapsed" to minimize the panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Roller</h3>
							
							<div class="panel-options">								
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div id="roller-status-chart">
								<div style=""></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-color panel-success"><!-- Add class "collapsed" to minimize the panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Motors</h3>
							
							<div class="panel-options">								
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div id="motors-status-chart">
								<div style=""></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-color panel-warning"><!-- Add class "collapsed" to minimize the panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Pulley</h3>
							
							<div class="panel-options">								
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div id="pulley-status-chart">
								<div style=""></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="panel panel-color panel-success"><!-- Add class "collapsed" to minimize the panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Cleaners</h3>
							
							<div class="panel-options">								
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div id="cleaners-status-chart">
								<div style=""></div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- timeline row -->
			<div class="row">
				<!-- time line section -->
				<div class="col-sm-6">


					<div class="panel panel-flat"><!-- Add class "collapsed" to minimize the panel -->
						<div class="panel-heading">
							<h3 class="panel-title">Activity On C25</h3>
							
							<div class="panel-options">
								<a href="#">
									<i class="linecons-cog"></i>
								</a>
								
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								
								<a href="#" data-toggle="reload">
									<i class="fa-rotate-right"></i>
								</a>
								
								<a href="#" data-toggle="remove">
									&times;
								</a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<ul class="cbp_tmtimeline">
								
								<li>
									<time class="cbp_tmtime" datetime="2014-12-06T03:45"><span>03:45 AM</span> <span>Today</span></time>
									
									<div class="cbp_tmicon timeline-bg-success">
										<i class="fa-paper-plane-o"></i>
									</div>
									
									<div class="cbp_tmlabel">
										<h2><a href="#">Agustian</a> <span>posted a Corrective Action Result</span></h2>
										<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
									</div>
								</li>
								
								<li>
									<time class="cbp_tmtime" datetime="2014-12-05T13:22"><span>01:22 PM</span> <span>Yesterday</span></time>
									
									<div class="cbp_tmicon timeline-bg-primary">
										<i class="fa-calendar"></i>
									</div>
									
									<div class="cbp_tmlabel">
										<h2><a href="#">Job Meeting</a></h2>
										<p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
									</div>
								</li>
								
								<li>
									<time class="cbp_tmtime" datetime="2014-11-23T13:41"><span>01:41 PM</span> <span>Two weeks ago</span></time>
									
									<div class="cbp_tmicon timeline-bg-info">
										<i class="fa-location-arrow"></i>
									</div>
									
									<div class="cbp_tmlabel">
										<h2><a href="#">Agustian</a> <span>checked in at</span> <a href="#">Laborator</a></h2>
										
										<blockquote>Great place, feeling like in home.</blockquote>
										
										<div id="sample-checkin" class="map-checkin" style="height: 170px; width: 100%;"></div>
									</div>
								</li>
								
								<li>
									<time class="cbp_tmtime" datetime="2014-11-23T13:41"><span>01:41 PM</span> <span>Two weeks ago</span></time>
									
									<div class="cbp_tmicon timeline-bg-warning">
										<i class="fa-camera-retro"></i>
									</div>
									
									<div class="cbp_tmlabel">
										<h2><a href="#">Agustian</a> <span>posted a Pulley Inspection Result</span></h2>
										
										<blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
										
										<div class="row">
											<div class="col-xs-5">
												<a href="#">
													<img src="assets/images/image-1.jpg" class="img-responsive img-rounded full-width" />
												</a>
											</div>
											
											<div class="col-xs-3">
												<a href="#">
													<img src="assets/images/image-4.jpg" class="img-responsive img-rounded full-width" />
												</a>
											</div>
											
											<div class="col-xs-4">
												
												<a href="#">
													<img src="assets/images/image-5.jpg" class="img-responsive img-rounded full-width margin-bottom" />
												</a>
												
												<div class="vspacer v2"></div>
												
												<a href="#">
													<img src="assets/images/image-3.jpg" class="img-responsive img-rounded full-width" />
												</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
			
						</div>
					</div>


					
				</div>
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
	
	
	
	<!-- Page Loading Overlay -->
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	

	<!-- <link rel="stylesheet" href="assets/css/xenon-beltcarepro.css"> -->

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/xenon-widgets.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>