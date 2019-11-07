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
            <div><img src="<?= base_url() ?>assets/main/images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
          </div>
          <div>+62 123-456-7890</div>
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
          <div class="home_title">Detail Pesanan</div>
          <div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
            <ul class="d-flex flex-row align-items-start justify-content-start text-center">
              <li><a href="<?= base_url('web') ?>">Home</a></li>
              <li>Pesanan Anda</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Cart -->

    <div class="cart_section">
      <div class="container">
        <div class="row cart_extra_row">
          <div class="col-lg-8 cart_extra_col mx-auto">
            <div class="cart_extra cart_extra_2">
              <div class="cart_extra_content cart_extra_total">
                <div class="cart_extra_title">DETAIL</div>
                <ul class="cart_extra_total_list">
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Nama Pemesan</div>
                    <div class="cart_extra_total_value ml-auto"><?= $order['nama'] ?></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Tanggal Pengambilan</div>
                    <div class="cart_extra_total_value ml-auto"><?= date('d/m/Y', strtotime($order['tanggal_pesan'])) ?></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Tanggal Pengembalian</div>
                    <div class="cart_extra_total_value ml-auto"><?= date('d/m/Y', strtotime($order['tanggal_kembalikan'])) ?></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Kode Referensi</div>
                    <div class="cart_extra_total_value ml-auto"><?= $order['kode_ref']; ?></div>
                  </li>
                  <li class="d-flex flex-row align-items-center justify-content-start">
                    <div class="cart_extra_total_title">Status</div>
                    <div class="cart_extra_total_value ml-auto">
                      <span class="<?= ($order['status'] == 'booked') ? 'text-success' : 'text-danger' ?>"><?= $order['status']; ?></span>
                    </div>
                  </li>
                  <span class="text-danger">*Silahkan foto atau catat kode referensi</span> <br>
                  <span class="text-danger">**Harap simpan kode referensi</span>
                </ul>
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
                    <li><a href="#">SPORT</a></li>
                    <li><a href="#">SUV</a></li>
                    <li><a href="#">CITY CAR</a></li>
                    <li><a href="#">TRUCK</a></li>
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