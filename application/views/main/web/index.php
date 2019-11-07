<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="<?= base_url() ?>assets/main/images/car.svg" width="40px" alt=""></div>
						<div>Rental Jogja</div>
					</div>
				</a>
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="<?= base_url('web') ?>">Home</a></li>
					<li><a href="<?= base_url('web/keranjang') ?>">Cart</a></li>
					<li><a href="<?= base_url('web/pesanan') ?>">Pesanan</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<!-- <div class="header_search">
					<form action="#" id="header_search_form">
						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="<?= base_url() ?>assets/main/images/search.png" alt=""></button>
					</form>
				</div> -->
				<!-- User -->
				<div class="user"><a href="<?= base_url('auth') ?>">
						<div><img src="<?= base_url() ?>assets/main/images/user.svg" alt="https://www.flaticon.com/authors/freepik">
						</div>
					</a></div>
				<!-- Cart -->
				<div class="cart"><a href="<?= base_url('web/keranjang') ?>">
						<div><img class="svg" src="<?= base_url() ?>assets/main/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					</a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div>
						<div><img src="<?= base_url() ?>assets/main/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					</div>
					<div>+63 123-456-7890</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url(assets/main/images/bg.jpg)"></div>
						<div class="container fill_height">
							<div class="row fill_height">
								<div class="col fill_height">
									<div class="home_container d-flex flex-column align-items-center justify-content-start">
										<div class="home_content">
											<div class="home_title">Rekomendasi Kami</div>
											<div class="home_subtitle">Kemudikan mobil yang kamu sukai</div>
											<div class="home_items">
												<div class="row">
													<?php foreach ($promo as $p) : ?>
														<div class="col-sm-4">
															<div class="home_item_side"><a href="#"><img width="350px" height="234px" src="<?= base_url() . $p['url'] ?>" alt="<?= $p['gambar'] ?>"></a></div>
														</div>
													<?php endforeach; ?>

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
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="section_title text-center">Mobil yang tersedia</div>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active"><a href="#">SPORT</a></li>
								<li><a href="#">SUV</a></li>
								<li><a href="#">CITY CAR</a></li>
								<li><a href="#">TRUCK</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row products_row">

					<!-- Product -->
					<?php foreach ($display as $m) : ?>
						<div class="col-xl-4 col-md-6">
							<div class="product">
								<div class="product_image"><img height="234px" style="width:100%" class="d-block" src="<?= base_url() . $m['url'] ?>" alt="<?= $m['gambar'] ?>"></div>
								<div class="product_content">
									<div class="product_info d-flex flex-row align-items-start justify-content-start">
										<div>
											<div>
												<div class="product_name"><a href="#"><?= $m['nama'] ?></a></div>
												<div class="product_category"> <a href="#"><?= $m['jenis'] ?></a></div>
											</div>
										</div>
										<div class="ml-auto text-right">
											<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="product_price text-right">Rp <?= number_format($m['harga'], 0, ',', '.') ?></div>
										</div>
									</div>
									<div class="product_buttons">
										<div class="text-right d-flex flex-row align-items-start justify-content-start">
											<div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
												<div>
													<div><img src="<?= base_url() ?>assets/main/images/heart_2.svg" class="svg" alt="">
														<div>+</div>
													</div>
												</div>
											</div>
											<div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" data-toggle="modal" data-target="#bookModal" data="<?= $m['plat_nomor'] ?>" onclick="lanjutKeBooking(this)">
												<div>
													<div>
														<a href="#" data-toggle="modal" data-target="#bookModal" data="<?= $m['plat_nomor'] ?>" onclick="lanjutKeBooking(this)">
															<img src="<?= base_url() ?>assets/main/images/cart.svg" class="svg" alt="">
														</a>
														<div>+</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
				<div class="row load_more_row">
					<div class="col">
						<div class="button load_more ml-auto mr-auto"><a href="<?= base_url('web/lebih') ?>">load more</a></div>
					</div>
				</div>
			</div>
		</div>


		<!-- Features -->

		<div class="features">
			<div class="container">
				<div class="row">

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="<?= base_url() ?>assets/main/images/icon_1.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Bayar ditempat</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon ml-auto mr-auto"><img src="<?= base_url() ?>assets/main/images/icon_2.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Mobil terawat</div>
							</div>
						</div>
					</div>

					<!-- Feature -->
					<div class="col-lg-4 feature_col">
						<div class="feature d-flex flex-row align-items-start justify-content-start">
							<div class="feature_left">
								<div class="feature_icon"><img src="<?= base_url() ?>assets/main/images/icon_3.svg" alt=""></div>
							</div>
							<div class="feature_right d-flex flex-column align-items-start justify-content-center">
								<div class="feature_title">Siap kemudikan</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- About -->
						<div class="col-lg-4 footer_col">
							<div class="footer_about">
								<div class="footer_logo">
									<a href="#">
										<div class="d-flex flex-row align-items-center justify-content-start">
											<div class="footer_logo_icon"><img src="<?= base_url() ?>assets/main/images/car.svg" width="50px" alt=""></div>
											<div>Rental Jogja</div>
										</div>
									</a>
								</div>
								<div class="footer_about_text">
									<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
								</div>
							</div>
						</div>

						<!-- Footer Links -->
						<div class="col-lg-4 footer_col">
							<div class="footer_menu">
								<div class="footer_title">Hashtag</div>
								<ul class="footer_list">
									<li>
										<a href="#">
											<div>#RENTALMOBILJOGJA</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div>#RENTALJOGJA</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div>#RENTALMOBIL</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div>#RENTAL</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div>#YOGYAKARTA</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Footer Contact -->
						<div class="col-lg-4 footer_col">
							<div class="footer_contact">
								<div class="footer_title">Social</div>
								<ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
								<div class="copyright order-md-1 order-2">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>
										document.write(new Date().getFullYear());
									</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="category.html">SPORT</a></li>
										<li><a href="category.html">SUV</a></li>
										<li><a href="category.html">CITY CAR</a></li>
										<li><a href="category.html">TRUCK</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="bookModalLabel">Pesan Mobil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('web/tambahkan_ke_keranjang') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="plat">Plat Nomor</label>
						<input type="text" readonly class="form-control" name="plat" id="plat">
					</div>
					<div class="form-group">
						<label for="tanggal">Tanggal Pengambilan</label>
						<input type="date" id="tanggal" name="tanggal" class="form-control">
					</div>
					<div class="form-group">
						<label for="lama">Lama Pesan (hari)</label>
						<input type="number" class="form-control" id="lama" name="lama">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Pesan</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	var lanjutKeBooking = function(x) {
		let plat = document.getElementById('plat');

		plat.value = x.getAttribute('data');
	}
</script>