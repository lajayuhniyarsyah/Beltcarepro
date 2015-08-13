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
								<h3 class="panel-title">ACTION PART HISTORY</h3>
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
								
								<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#example-3").dataTable().yadcf([
										{column_number : 0},
										{column_number : 1, filter_type: 'text'},
										{column_number : 2, filter_type: 'text'},
									]);
								});
								</script>
								
								<table class="table table-striped table-bordered" id="example-3">
									<thead>
										<tr class="replace-inputs">
											<th>PART NAME</th>
											<th>PART CODE</th>
											<th>STATUS</th>
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Trident</td>
											<td>Internet Explorer 4.0</td>
											<td>Win 95+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet Explorer 5.0</td>
											<td>Win 95+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet Explorer 5.5</td>
											<td>Win 95+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet Explorer 6</td>
											<td>Win 98+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>Internet Explorer 7</td>
											<td>Win XP SP2+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Trident</td>
											<td>AOL browser (AOL desktop)</td>
											<td>Win XP</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Firefox 1.5</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Firefox 2.0</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Firefox 3.0</td>
											<td>Win 2k+ / OSX.3+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Camino 1.0</td>
											<td>OSX.2+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Camino 1.5</td>
											<td>OSX.3+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Netscape 7.2</td>
											<td>Win 95+ / Mac OS 8.6-9.2</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Netscape Browser 8</td>
											<td>Win 98SE+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Netscape Navigator 9</td>
											<td>Win 98+ / OSX.2+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.0</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.1</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.2</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.3</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.4</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.5</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										<tr>
											<td>Gecko</td>
											<td>Mozilla 1.6</td>
											<td>Win 95+ / OSX.1+</td>
											<td class="center">
												<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
													Edit
												</a>
												
												<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
													Delete
												</a>
												
												<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
													Profile
												</a>
											</td>
										</tr>
										
									</tbody>
									<tfoot>
										<tr>
											<th>PART NAME</th>
											<th>PART CODE</th>
											<th>STATUS</th>
											<th>ACTION</th>
										</tr>
									</tfoot>
								</table>
								
							</div>
						</div>
						<!--END ISI CONTENT -->
					<?php include "layout/header.php"; ?>
				</div>			
			</div>
		<?php include "layout/bottom.php"; ?>
	</body>
</html>