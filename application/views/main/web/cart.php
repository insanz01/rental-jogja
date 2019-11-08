<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="#">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="<?= base_url() ?>assets/main/images/car.svg" width="40px" alt=""></div>
						<div>Rental Mobil</div>
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
				<!-- User -->
				<div class="user"><a href="<?= base_url('auth') ?>">
						<div><img src="<?= base_url() ?>assets/main/images/user.svg" alt="https://www.flaticon.com/authors/freepik">
						</div>
					</a></div>
				<!-- Cart -->
				<div class="cart"><a href="<?= base_url('web/keranjang') ?>">
						<div><img src="<?= base_url() ?>assets/main/images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div>
					</a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div>
						<div><img src="<?= base_url() ?>assets/main/images/phone.svg" alt="https://www.flaticon.com/authors/freepik" onclick="contact_us()"></div>
					</div>
					<div onclick="contact_us()">+62 123-456-7890</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Booking Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="<?= base_url('web/index') ?>">Home</a></li>
							<li>Keranjang Anda</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Cart -->

		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="cart_container">

							<!-- Cart Bar -->
							<div class="cart_bar">
								<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
									<li class="mr-auto">Mobil</li>
									<li>Jenis</li>
									<li>Tanggal Pesan</li>
									<li>Harga (Rp)</li>
									<li>Jumlah hari</li>
									<li>Total</li>
								</ul>
							</div>

							<!-- Cart Items -->
							<div class="cart_items">
								<?php if ($book) : ?>
									<ul class="cart_items_list">

										<!-- Cart Item -->
										<?php $i = 1; ?>

										<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
											<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
												<div>
													<div class="product_number"><?= $i++; ?></div>
												</div>
												<div>
													<div class="product_image"><img src="<?= base_url() . $book['url'] ?>" alt=""></div>
												</div>
												<div class="product_name_container">
													<div class="product_name"><a href="#"><?= $book['nama'] ?></a></div>
													<div class="product_text"><?= $book['plat'] ?></div>
												</div>
											</div>

											<div class="product_color product_text"><span>Jenis:</span><?= $book['jenis'] ?></div>
											<div class="product_size product_text"><span>Tanggal Pesan:</span><?= date('d/m/Y', strtotime($book['tanggal'])) ?></div>
											<div class="product_price product_text"><span>Harga (Rp): </span><?= number_format($book['harga'], 0, ',', '.') ?></div>
											<div class="product_quantity_container"><span>Jumlah hari:</span>
												<?= $book['lama'] ?> hari
											</div>
											<div class="product_total product_text"><span>Total: </span><?= number_format($book['harga'] * $book['lama'], 0, ',', '.') ?></div>
										</li>
									</ul>
								<?php else : ?>
									<ul class="cart_items_list">

										<!-- Cart Item -->

										<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
											<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
												<div>
													<div class="product_number"></div>
												</div>
												<div>
													<div class="product_image"></div>
												</div>
												<div class="product_name_container">
													<div class="product_name"><a href="#"></div>
													<div class="product_text"></div>
												</div>
											</div>

											<div class="product_color product_text"><span>Jenis:</span></div>
											<div class="product_size product_text"><span>Tanggal Pesan:</span></div>
											<div class="product_price product_text"><span>Harga (Rp): </span></div>
											<div class="product_quantity_container">
											</div>
											<div class="product_total product_text"><span>Total: </span></div>
										</li>
									</ul>
								<?php endif; ?>
							</div>

							<!-- Cart Buttons -->
							<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
								<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="button button_clear trans_200"><a href="<?= base_url('web/hapus_keranjang') ?>">Hapus</a></div>
									<div class="button button_continue trans_200"><a href="<?= base_url('web') ?>">Ganti</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row cart_extra_row">
					<?php if ($book) : ?>
						<div class="col-lg-8 cart_extra_col mx-auto">
							<div class="cart_extra cart_extra_2">
								<div class="cart_extra_content cart_extra_total">
									<div class="cart_extra_title">SUMMARY</div>
									<ul class="cart_extra_total_list">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Tanggal Pengambilan</div>
											<div class="cart_extra_total_value ml-auto"><?= date('d/m/Y', strtotime($tanggal_pesan)) ?></div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Tanggal Pengembalian</div>
											<div class="cart_extra_total_value ml-auto"><?= date_format($tanggal_kembali, 'd/m/Y') ?></div>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<div class="cart_extra_total_title">Kode Referensi</div>
											<div class="cart_extra_total_value ml-auto"><?= $ref_code; ?></div>
										</li>
										<span class="text-danger">*Silahkan foto atau catat kode referensi</span> <br>
										<span class="text-danger">**Harap simpan kode referensi</span>
									</ul>
									<div class="checkout_button trans_200" data-toggle="modal" data-target="#checkoutModal"><a href="#" data-toggle="modal" data-target="#checkoutModal">Selesai & Simpan</a></div>
								</div>
							</div>
						</div>
					<?php endif; ?>
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
											<div class="footer_logo_icon"><img src="<?= base_url() ?>assets/main/images/car.svg" width="40px" alt=""></div>
											<div>Rental Mobil</div>
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
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="checkoutModalLabel">Pesan Mobil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('web/checkout') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="ktp">Nomor KTP</label>
						<input type="text" class="form-control" name="ktp" id="ktp">
					</div>
					<div class="form-group">
						<label for="nama">Nama Pemesan</label>
						<input type="text" id="nama" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="nomor">Nomor HP (WA)</label>
						<input type="text" id="nomor" name="nomor" class="form-control">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat Tempat Tanggal / Asal</label>
						<textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5"></textarea>
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
	var ubahTanggal = function() {
		let lama = document.getElementById('lama');
		console.log('lama sewa', lama.value)
	}

	var contact_us = function() {
		window.open("http://api.whatsapp.com/send?phone=6281234567890&text=halo%20gan", "_blank");
	}
</script>