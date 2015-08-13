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
						
						<!--START ISI CONTENT -->

						<script type="text/javascript">
							$(function () {
							    $('#conveyor').highcharts({
							        chart: {
							            type: 'pie',
							            options3d: {
							                enabled: true,
							                alpha: 45
							            }
							        },
							        title: {
							            text: 'C25 Conveyor Condition'
							        },
							        plotOptions: {
							            pie: {
							                innerSize: 100,
							                depth: 45
							            }
							        },
							        colors: ['#d5080f', '#f7aa47', '#0e62c7', '#069FAD', '#68b828'],
							        series: [{
							            name: 'Delivered amount',
							            data: [
							                 ['Problem Lvl4', 8],
								             ['Problem Lvl3', 6],
											 ['Problem Lvl2', 1],
								             ['Problem Lvl1', 3],
								             ['Running Well', 8],
							            ]
							        }]
							    });
							});
						</script>
						<?php 
							$part=array("Belt Conveyor","Roller","Pulley","Motor","Cleaners");
							for ($i=0; $i<=3; $i++){
						?>
							<script type="text/javascript">
								$(function () {
								    $('<?php echo '.part'.$i; ?>').highcharts({
								        chart: {
								            type: 'pie',
								            options3d: {
								                enabled: true,
								                alpha: 45
								            }
								        },
								        title: {
								            text: '<?php echo $part[$i] ?>'
								        },
								        plotOptions: {
								            pie: {
								                innerSize: 100,
								                depth: 45,
								                dataLabels: {
							                        enabled: false
							                    },
								            }
								        },
								        colors: ['#d5080f', '#f7aa47', '#0e62c7', '#069FAD', '#68b828'],
								        series: [{
								            name: 'Delivered amount',
								            data: [
								               ['Problem Lvl4', 8],
								             ['Problem Lvl3', 6],
											 ['Problem Lvl2', 1],
								             ['Problem Lvl1', 3],
								             ['Running Well', 8],
								            ]
								        }]
								    });
								});
							</script>		
						<?php
							}
						?>
						<div class="page-title">
							<div class="title-env">
								<h1 class="title">Conveyor Condition </h1>
								<p class="description">Conveyor Condition 214BC1 214 BC 1 </p>
							</div>
							<div class="breadcrumb-env">
								<ol class="breadcrumb bc-1">
									<li>
										<a href="dashboard-1.html"><i class="fa-home"></i>Dashboard</a>
									</li>	
									<li class="active">
										<strong>Conveyor Condition</strong>
									</li>
								</ol>	
							</div>
						</div>

						<div class="row spacebuttom">
							<div class="col-sm-3">
								<div data-duration="2" data-suffix="%" data-to="99.9" data-from="0" data-count=".num" class="xe-widget xe-counter">
									<div class="xe-icon">
										<i class="linecons-cloud"></i>
									</div>
									<div class="xe-label">
										<strong class="num">55.2%</strong>
										<span>C25</span>
									</div>
								</div>
								<div data-duration="3" data-to="512" data-from="0" data-count=".num" class="xe-widget xe-counter-block xe-counter-block-purple">
									<div class="xe-upper">	
										<div class="xe-icon">
											<i class="linecons-attach"></i>
										</div>
										<div class="xe-label">
											<strong class="num">31</strong>
											<span>ACTIONS IN LAST 3 MONTHS</span>
										</div>
									</div>
									<div class="xe-lower">
										<div class="border"></div>
										<span>20 PREVENTIVE</span>
										<span>3 PREDICTIVE</span>
										<span>8 CORRECTIVE</span>
									</div>
								</div>
								<div data-duration="3" data-to="512" data-from="0" data-count=".num" class="xe-widget xe-counter-block xe-counter-block-yellow">
									<div class="xe-upper">	
										<div class="xe-icon">
											<i class="linecons-attach"></i>
										</div>
										<div class="xe-label">
											<strong class="num">1254</strong>
											<span>HOURS UPTIME</span>
										</div>
									</div>
									<div class="xe-lower">
										<div class="border"></div>
									<span>LAST SHUTDOWN</span>
										<span>27/01/2015</span>
									</div>
								</div>
							</div>
							<div class="col-sm-9">
								<div id="conveyor"></div>
							</div>
						</div>

						<!-- <div class="page-title">
						
						<div style="clear:both;"></div>
							<div class="title-env">
								<h1 class="title">Part Condition </h1>
							</div>	
						</div> -->
						<div class="col-sm-12">
							<?php 
								for ($i=0; $i <= 3; $i++) { 
									echo '<div class="col-sm-3">';
									echo '<div class="part'.$i.'"></div>';
									echo '</div>';	
								}
							?>	
						</div>
						<div style="clear:both;"></div>
						<!--END ISI CONTENT -->
					<?php include "layout/header.php"; ?>
				</div>			
			</div>
		<?php include "layout/bottom.php"; ?>
	</body>
</html>