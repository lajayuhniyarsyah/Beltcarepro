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
								$('#chartline').highcharts({
									title: {
										text: 'Action Part History',
										x: -20 //center
									},
									subtitle: {
										text: 'Detail',
										x: -20
									},
									xAxis: {
										categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
											'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
									},
									yAxis: {
										title: {
											text: 'Value'
										},
										plotLines: [{
											value: 0,
											width: 1,
											color: '#808080'
										}]
									},
									tooltip: {
										valueSuffix: '°C'
									},
									legend: {
										layout: 'vertical',
										align: 'right',
										verticalAlign: 'middle',
										borderWidth: 0
									},
									series: [{
										name: 'Belt Conveyor',
										data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
									}, {
										name: 'Roller',
										data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
									}, {
										name: 'Motor',
										data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
									}, {
										name: 'Pulley',
										data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
									}]
								});
							});
						</script>

						<div id="chartline"></div>
						
												<!-- DATA TABLE -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">BELT CONVEYOR</h3>
								<div class="panel-options">
									<a href="#" data-toggle="panel">
										<span class="collapse-icon">&ndash;</span>
										<span class="expand-icon">+</span>
									</a>
									<a href="#" data-toggle="remove">
										&times;
									</a>
								</div>
							</div>
							<div class="panel-body">
								
							<!-- 	<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#example-3").dataTable().yadcf([
										{column_number : 0},
										{column_number : 1, filter_type: 'text'},
										{column_number : 2, filter_type: 'text'},
									]);
								});
								</script> -->
								
								<table class="table table-striped table-bordered" id="example-3">
									<thead>
										<tr class="replace-inputs">
											<th>Conveyor Code</th>
											<th>ID Code</th>
											<th>Top &amp; Bottom Cover</th>
											<th>Edge Rubber</th>
											<th>Belt Profile</th>
											<th>Date Inspect</th>
											<th>Photos</th>
											<th>Suggest</th>
										</tr>
									</thead>
									<tbody>
										<?php for($i=1; $i<=5; $i++){ ?>
											<tr>
												<td>C - 2<?php echo $i; ?></td>
												<td>BC-C2<?php echo $i; ?>-00<?php echo $i; ?></td>
												<td>Win 95+</td>
												<td>Internet Explorer 4.0</td>
												<td>Win 95+</td>
												<td>Internet Explorer 4.0</td>
												<td>
													<a href="javascript:;" onclick="jQuery('.modal-1').modal('show', {backdrop: 'fade'});">
														<div class="cropthumbnail">
														  <img src="images/1.jpg" class="portrait" alt="Image" />
														</div>
													</a>
													
													<a href="javascript:;" onclick="jQuery('.modal-1').modal('show', {backdrop: 'fade'});">
														<div class="cropthumbnail">
														  <img src="images/1.jpg" class="portrait" alt="Image" />
														</div>
													</a>

												</td>
												<td>Win 95+</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
								
								<!-- Modal Atau Foto -->
									<div class="modal fade modal-1">
										<div class="modal-dialog">
											<div class="modal-content">
												
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title">
														BELT CONVEYOR RUNNING WELL
													</h4>
												</div>
												<div class="modal-body">
													<img src="images/1.jpg" class="modal-image" />
												</div>
												<h4 class="modal-title">
													Permukaan Top cover pada sisi kanan belt tergores sepanjang belt.
													<br/>
													* Permukaan Top dan Bottom cover mengalami crack dibeberapa titik/area
												</h4>
												<div class="modal-footer">
													<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
						<!--END ISI CONTENT -->
					<?php include "layout/header.php"; ?>
				</div>			
			</div>
		<?php include "layout/bottom.php"; ?>
	</body>
</html>