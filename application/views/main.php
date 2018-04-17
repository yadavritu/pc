<div class="main">
				<div class="breadcrumb">
					<a href="#">Home</a> 
					<a href="#">Products</a> 
				</div>
				<div class="top-banner">
					<div class="top-banner-title">Dashboard</div>
					<div class="top-banner-subtitle">Welcome back, Admin <i class="fa fa-map-marker"></i> New York City</div>
				</div>
				<div class="content with-top-banner">
					<div class="content-header no-mg-top">
						<i class="fa fa-newspaper-o"></i>
						<div class="content-header-title"><a href="<?=base_url();?>Pizza">Clinte_site</a></div><br>
						
						<select class="select-rounded pull-right">
							<option>Today</option>
							<option>7 Days</option>
							<option>14 Days</option>
							<option>Last Month</option>
						</select>
					</div>
					<div class="panel">
						<div class="row">
							<div class="col-md-3 card-wrapper">
								<div class="card">
									<i class="fa fa-product-hunt"></i>
									<div class="clear">
										<div class="card-title">
											<span class="timer" data-from="0" data-to="<?= $pro_count;?>"><?= $pro_count;?></span>
										</div>
										<div class="card-subtitle">Product</div>
									</div>
								</div>
								
							</div>
							<div class="col-md-3 card-wrapper">
								<div class="card">
									<i class="fa fa-commenting-o"></i>
									<div class="clear">
										<div class="card-title">
											<span class="timer" data-from="0" data-to="<?= $feed_count;?>"><?= $feed_count;?></span>
										</div>
										<div class="card-subtitle">FeedBack</div>
									</div>
								</div>
								
							</div>
							<div class="col-md-3 card-wrapper">
								<div class="card">
									<i class="fa fa-user"></i>
									<div class="clear">
										<div class="card-title">
											<span class="timer" data-from="0" data-to="<?= $client_count;?>"><?= $client_count;?></span>
										</div>
										<div class="card-subtitle">Clients</div>
									</div>
								</div>
								
							</div>
							<div class="col-md-3 card-wrapper">
								<div class="card">
									<i class="fa fa-balance-scale"></i>
									<div class="clear">
										<div class="card-title">
											<span class="timer" data-from="0" data-to="<?= $bika_count;?>"><?= $bika_count;?></span>
										</div>
										<div class="card-subtitle">Sale Product</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="row">
							<div class="col-md-8 sm-max">
								<div class="content-header">
									<i class="fa fa-signal"></i>
									<div class="content-header-title">Line Chart</div>
								</div>
								<div class="content-box">
									<div class="content-box-header">
										<div class="header-menu active">Visitors</div>
										<div class="header-menu">Comments (134)</div>
										<select class="select-rounded pull-right">
											<option>Today</option>
											<option>7 Days</option>
											<option>14 Days</option>
											<option>Last Month</option>
										</select>
									</div>
									<div class="line-chart-wrapper">
										<div class="line-chart-label">LAST VISITORS</div>
										<div class="line-chart-value">
											<span class="timer" data-from="0" data-to="12501">12,501</span>
										</div>
										<canvas id="line-chart"></canvas>
									</div>
								</div>
							</div>
							<div class="col-md-4 sm-max">
								<div class="content-header">
									<i class="fa fa-suitcase"></i>
									<div class="content-header-title">Products</div>
									<select class="select-rounded pull-right">
										<option>Today</option>
										<option>7 Days</option>
										<option>14 Days</option>
										<option>Last Month</option>
									</select>
								</div>
								<div class="content-box slide-item">
								<?php foreach($pproduct_name as $p1){} ?>
								<?php foreach($slider as $s1){ ?>
									<div class="product-list">
										<?= $s1->banner_image; ?>
										<div class="clear">
											<div class="product-list-title"></div>
											<div class="product-list-category"><?=$p1->p_name;?></div>
										</div>
										<div class="product-list-price"><?=$p1->p_price;?></div>
									</div>
								<?php } ?>
									</div>
							</div>
						</div>
					</div>
					<div class="panel">
						<div class="row">
							<div class="col-md-4">
								<div class="content-header">
									<i class="fa fa-newspaper-o"></i>
									<div class="content-header-title">Donut Chart</div>
								</div>
								<div class="content-box">
									<div class="donut-chart-wrapper">
										<canvas width="120" height="120" id="donut-chart"></canvas>
										<div class="donut-chart-label">
											<div class="donut-chart-value">330</div>
											<div class="donut-chart-title">Total Visitor</div>
										</div>
									</div>
									<div class="donut-chart-legend">
										<div class="legend-list">
											<div class="legend-bullet green"></div>
											<div class="legend-title">Australia</div>
										</div>
										<div class="legend-list">
											<div class="legend-bullet red"></div>
											<div class="legend-title">Nigeria</div>
										</div>
										<div class="legend-list">
											<div class="legend-bullet yellow"></div>
											<div class="legend-title">United States</div>
										</div>
										<div class="legend-list">
											<div class="legend-bullet blue"></div>
											<div class="legend-title">Japan</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-8">
								<div class="content-header">
									<i class="fa fa-newspaper-o"></i>
									<div class="content-header-title">New Products</div>
								</div>
								<div class="content-box">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th><input type="checkbox"></th>
													<th>Product Name</th>
													<th class="text-center">Images</th>
													<th class="text-center">Status</th>
													<th class="text-right">Order Total</th>
													<th class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php foreach($pproduct_name as $p1){} ?>
												<?php foreach($slider as $s1){ ?>
												<tr>
													<th><input type="checkbox"></th>
													<td class="nowrap"><?=$p1->p_name;?></td>
													<td class="text-center"><?= $s1->banner_image; ?></td>
													<td class="text-center">
														<div class="status-pill green"></div>
													</td>
													<td class="text-right">$22</td>
													<td class="text-center"><i class="fa fa-pencil"></i> <i class="fa fa-trash"></i></td>
												</tr>
											<?php } ?>
										
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	