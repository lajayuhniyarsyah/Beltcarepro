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

						<div class="page-title">
							<div class="title-env">
								<h1 class="title">CONVEYOR PART CONDITION</h1>
								<p class="description">VIEW LIST PART CONVEYOR</p>
							</div>
							<div class="breadcrumb-env">
								<ol class="breadcrumb bc-1">
									<li>
										<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
									</li>
									<li>
										<a href="extra-gallery.html">Conveyor Condition</a>
									</li>
									<li class="active">
										<strong>Part Condition</strong>
									</li>
								</ol>	
							</div>
						</div>
						
						<!-- DATA TABLE -->
						<div class="panel panel-default">
								<div class="col-sm-9">
									<table>
										<tr>
											<td><p class="description"><strong>Conveyor Name</strong></p></td>
											<td><p class="description"> : </p></td>
											<td><p class="description"> C25</p></td>
										</tr>
										<tr>
											<td><p class="description"><strong>Part Conveyor</strong></p></td>
											<td><p class="description"> : </p></td>
											<td><p class="description"> BELT CONVEYOR</p></td>
										</tr>
										<tr>
											<td><p class="description"><strong>Status Conveyor</strong></p></td>
											<td><p class="description"> : </p></td>
											<td><p class="description"> Running Well</p></td>
										</tr>
									</table>
									  
								</div>
								<div class="col-sm-3">
									<table>
										<tr>
											<td><p class="description"><strong>Date</strong></p></td>
											<td><p class="description">:</p></td>
											<td><p class="description">12-Agustus-2015</p></td>
										</tr>
									</table>
								</div>
							<div class="panel-heading">
								<!-- <h3 class="panel-title">CONVEYOR LIST PART</h3> -->
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