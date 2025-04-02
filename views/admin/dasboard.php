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
					<div class="cr-breadcrumb" >
						<h5 style="font-size: 30px; color:green; text-align: center; font-weight: bold;">Thống kê sản phẩm</h5>
						
					</div>
					<div class="cr-tools">
						
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							 <div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-1"><i class="ri-shield-user-line"></i></span>
											<div class="growth-numbers">
												<h4>Các tài khoản đã đăng kí</h4>
												<h5>
													<?=count($tai_khoan)?>
												</h5>
											</div>
										</div>
										
									</div>
								</div>
							</div> 
							 <div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-2"><i class="ri-shopping-bag-3-line"></i></span>
											<div class="growth-numbers">
												<h4>Các đơn hàng</h4>
												<h5><?=count($order)?></h5>
											</div>
										</div>
										
									</div>
								</div>
							</div> 
							<div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-3"><i class="ri-money-dollar-circle-line"></i></span>
											<div class="growth-numbers">
												<h4>Các sản phẩm</h4>
												<h5><?=count($product)?></h5>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="cr-card">
									<div class="cr-card-content label-card">
										<div class="title">
											<span class="icon icon-4"><i class="ri-exchange-dollar-line"></i></span>
											<div class="growth-numbers">
												<h4>Tổng tiền</h4>
												<h5><?=number_format($sum)?> VNĐ</h5>
											</div>
										</div>
										
									</div>
								</div>
							</div> 
						</div>
					</div>
				</div>
				<div class="row">
					
					
				</div>

				<!-- Sản phẩm bán chạy nhất -->
				<div class="row">
					<div class="col-xxl-6 col-xl-12">
						<div class="cr-card" id="best_seller_tbl">
							<div class="cr-card-header">
								<h4 class="cr-card-title">Sản phẩm bán chạy nhất</h4>
								<div class="header-tools">
									<a href="" class="m-r-10 cr-full-card" title="Full Screen"><i
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
													<th></th>
													<th></th>
													<th>Giá tiền</th>
													<th>Tổng tiền</th>
												
												</tr>
											</thead>
											<tbody>
												<?php foreach($bestSeller as $best): ?>
												<tr>
													<td style="width: 300px;"><img class="cat-thumb" src="<?=$best['anh_sp']?>"
															alt="clients Image"><span class="name"><?=$best['ten_sp']?></span>
													</td>
													<td></td>
														<span class="cat" >
															<td><a href="product-list.html" style="color: black;"><?=$best['gia_tien']?></a></td>
															<td><a href="product-list.html" style="color: black;"><?=$best['tong_tien']?></a></td>
														</span>
													
													<td></td>
													<td></td>
												</tr>
												<?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Sản phẩm hàng đầu -->
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

				<!-- Đơn hàng gần đây -->
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