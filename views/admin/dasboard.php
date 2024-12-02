<!-----------------------------------------------------------------------------------
    Item Name: Carrot - Multipurpose eCommerce HTML Template.
    Author: ashishmaraviya
    Version: 2.1
    Copyright 2024
----------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:02 GMT -->

<head>
	<?php include_once "views/admin/layout/linkCss.php" ?>
</head>

<body>
	<main class="wrapper sb-default ecom">
		<!-- Loader -->
		<div id="cr-overlay">
			<div class="loader"></div>
		</div>

		<!-- Header -->
		<header class="cr-header">
			<?php include_once "views/admin/layout/header.php" ?>
		</header>
		<!-- sidebar -->
		<?php include_once "views/admin/layout/sidebar.php" ?>

		<!-- Notify sidebar -->
		<div class="cr-notify-bar-overlay"></div>
		<div class="cr-notify-bar">
			<div class="cr-bar-title">
				<h6>Notifications<span class="label">12</span></h6>
				<a href="javascript:void(0)" class="close-notify"><i class="ri-close-line"></i></a>
			</div>
			<div class="cr-bar-content">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="alert-tab" data-bs-toggle="tab" data-bs-target="#alert"
							type="button" role="tab" aria-controls="alert" aria-selected="true">Alert</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages"
							type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log" type="button"
							role="tab" aria-controls="log" aria-selected="false">Log</button>
					</li>
				</ul>

			</div>
		</div>

		<!-- Main content -->
		<div class="cr-main-content">
			<div class="container-fluid">
				<!-- Page title & breadcrumb -->
				<div class="cr-page-title">
					<div class="cr-breadcrumb">
						<h5>Thống kê sản phẩm</h5>
						<ul>
							<li><a href="index.html" style="color: green">SHOE SHOP</a></li>
							<li>Thống kê sản phẩm</li>
						</ul>
					</div>
					<div class="cr-tools">
						<div id="pagedate">
							<div class="cr-date-range" title="Date">
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<!-- <div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-1"><i class="ri-shield-user-line"></i></span>
											<div class="growth-numbers">
												<h4>Customers</h4>
												<h5>857k</h5>
											</div>
										</div>
										<p class="card-groth up">
											<i class="ri-arrow-up-line"></i>
											32%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-2"><i class="ri-shopping-bag-3-line"></i></span>
											<div class="growth-numbers">
												<h4>Order</h4>
												<h5>08.65k</h5>
											</div>
										</div>
										<p class="card-groth down">
											<i class="ri-arrow-down-line"></i>
											1.7%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-3"><i class="ri-money-dollar-circle-line"></i></span>
											<div class="growth-numbers">
												<h4>Revenue</h4>
												<h5>$85746</h5>
											</div>
										</div>
										<p class="card-groth down">
											<i class="ri-arrow-down-line"></i>
											3.8%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div> -->
							<!-- <div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-4"><i class="ri-exchange-dollar-line"></i></span>
											<div class="growth-numbers">
												<h4>Expenses</h4>
												<h5>$75462</h5>
											</div>
										</div>
										<p class="card-groth up">
											<i class="ri-arrow-up-line"></i>
											8%
											<span>Last Month</span>
										</p>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-xxl-8 col-xl-12">
						<div class="cr-card revenue-overview">
							<div class="cr-card-header header-575">
								<h4 class="cr-card-title">Revenue Overview</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="Full Screen"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range date">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content">
								<div class="cr-chart-header">
									<div class="block">
										<h6>Orders</h6>
										<h5>825
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Revenue</h6>
										<h5>$89k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Expence</h6>
										<h5>$68k
											<span class="down"><i class="ri-arrow-down-line"></i>24%</span>
										</h5>
									</div>
									<div class="block">
										<h6>Profit</h6>
										<h5>$21k
											<span class="up"><i class="ri-arrow-up-line"></i>24%</span>
										</h5>
									</div>
								</div>
								<div class="cr-chart-content">
									<div id="newrevenueChart" class="mb-m-24"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-6 col-md-12">
						<div class="cr-card" id="campaigns">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Campaigns</h4>
								<div class="header-tools">
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content">
								<div class="cr-chart-content">
									<div id="newcampaignsChart"></div>
								</div>
								<div class="cr-chart-header-2">
									<div class="block">
										<h6>Social</h6>
										<h5><span class="up">94%<i class="ri-arrow-up-line"></i></span>75k</h5>
									</div>
									<div class="block">
										<h6>Referral</h6>
										<h5><span class="down">96%<i class="ri-arrow-down-line"></i></span>54k</h5>
									</div>
									<div class="block">
										<h6>Organic</h6>
										<h5><span class="up">72%<i class="ri-arrow-up-line"></i></span>2.5k</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="row">
					<div class="col-xxl-6 col-xl-12">
						<div class="cr-card" id="best_seller_tbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Sản phẩm bán chạy nhất</h4>
								<div class="header-tools">
									<a href="javascript:void(0)" class="m-r-10 cr-full-card" title="Full Screen"><i
											class="ri-fullscreen-line"></i></a>
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="best-seller-table">
									<div class="table-responsive">
										<table id="best_seller_data_table" class="table">
											<thead>
												<tr>
													<th>Vendor</th>
													<th>Category</th>
													<th>Stock</th>
													<th>Sales</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><img class="cat-thumb" src="assets/admin/img/clients/1.jpg"
															alt="clients Image"><span class="name">DS Fashion</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Watches</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>685</td>
													<td>$1254</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/admin/img/clients/2.jpg"
															alt="clients Image"><span class="name">Loka Creation</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Phone</a>
															<a href="product-list.html">Camera</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>874</td>
													<td>$1768</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/admin/img/clients/3.jpg"
															alt="clients Image"><span class="name">Vorna Arts</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Laptop</a>
															<a href="product-list.html">Furniture</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>95</td>
													<td>$2296</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/admin/img/clients/4.jpg"
															alt="clients Image"><span class="name">Lestie Shop</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Phones</a>
														</span>
													</td>
													<td>354</td>
													<td>$2754</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/admin/img/clients/5.jpg"
															alt="clients Image"><span class="name">Moris Gallery</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Tools</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Bags</a>
														</span>
													</td>
													<td>675</td>
													<td>$3105</td>
												</tr>
												<tr>
													<td><img class="cat-thumb" src="assets/admin/img/clients/6.jpg"
															alt="clients Image"><span class="name">Jens Fashion.</span>
													</td>
													<td>
														<span class="cat">
															<a href="product-list.html">Shoes</a>
															<a href="product-list.html">Clothes</a>
															<a href="product-list.html">Jewellery</a>
														</span>
													</td>
													<td>854</td>
													<td>$3854</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-6 col-xl-12">
						<div class="cr-card" id="top_product_tbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Sản phẩm hàng đầu</h4>
								<div class="header-tools">								
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="top-product-table">
									<div class="table-responsive">
										<table id="top_product_data_table" class="table">
											<thead>
												<tr>
													<th></th>
													<th></th>
													<th>Giá tiền</th>
													<th>Lượt xem</th>

												</tr>
											</thead>
											<tbody>

												<?php foreach ($topProducts as $top): ?>
													<tr>
														<td style="width: 300px;"><img class="cat-thumb" src="<?= $top['anh_sp'] ?>"
																alt="clients Image"><span class="name"><?= $top['ten_sp'] ?></span>
														</td>
														<td></td>
														<td><?= $top['gia_tien'] ?></td>
														<td><?= $top['luot_xem'] ?></td>

													</tr>
												<?php endforeach ?>
											</tbody>
										</table>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xxl-8 col-xl-12">
						<div class="cr-card" id="ordertbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Đơn hàng gần đây</h4>
								<div class="header-tools">
									
									
								</div>
							</div>
							<div class="cr-card-content card-default">
								<div class="order-table">
									<div class="table-responsive">
										<table id="recent_order_data_table" class="table">
											<thead>
												<tr>
													<th>ID đơn hàng</th>
													<th>Phương thức thanh toán</th>
													<th>Ngày đặt đơn</th>

												</tr>
											</thead>
											<tbody>
												<?php foreach ($mostRecent as $most): ?>
												<tr>
													<td class="token"><?= $most['id_donhang'] ?></td>
													<td><?= $most['phuongthuc_thanhtoan'] ?></td>
													<td><?= $most['ngaydat_don'] ?></td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-xl-6 col-md-12">
						<div class="cr-card" id="fxmap">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Quốc gia hàng đầu</h4>
								<div class="header-tools">
									<div class="cr-date-range dots">
										<span></span>
									</div>
								</div>
							</div>
							<div class="cr-card-content">
								<div class="cr-map-view ecom-map">
									<div id="world-map" class="world-map"></div>
								</div>
								<div class="cr-map-detail">
									<div class="cr-map-detail">
										<div class="title">
											<h5>Revenue</h5>
											<a href="#" class="visit" title="View all data">view <i
													class="ri-arrow-right-line"></i></a>
										</div>
										<div class="cr-detail-list">
											<div class="cr-label">
												<div>
													<label>India</label>
													<span class="down"><i class="ri-arrow-down-line"></i>2.6%</span>
												</div>
												<p>$958.5k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-secondary" role="progressbar"
													style="width: 95%" aria-valuenow="95" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="cr-detail-list">
											<div class="cr-label">
												<div>
													<label>Morocco</label>
													<span class="up"><i class="ri-arrow-up-line"></i>5.6%</span>
												</div>
												<p>$788.7k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar"
													style="width: 84%" aria-valuenow="84" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="cr-detail-list">
											<div class="cr-label">
												<div>
													<label>Brazil</label>
													<span class="up"><i class="ri-arrow-up-line"></i>3.7%</span>
												</div>
												<p>$592.2k</p>
											</div>
											<div class="progress">
												<div class="progress-bar bg-primary" role="progressbar"
													style="width: 76%" aria-valuenow="76" aria-valuemin="0"
													aria-valuemax="100"></div>
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

		<!-- Footer -->
		<footer>
			<?php include_once "views/admin/layout/footer.php" ?>
		</footer>
		<!-- Feature tools -->
		<?php include_once "views/admin/layout/feature-tools.php" ?>
	</main>

	<?php include_once "views/admin/layout/script.php" ?>
</body>


<!-- Mirrored from maraviyainfotech.com/projects/carrot/carrot-v21/admin-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 15:41:34 GMT -->

</html>