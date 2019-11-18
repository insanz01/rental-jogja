<div class="super_container">

  <!-- Header -->

  <header class="header">
    <div class="header_overlay"></div>
    <div class="header_content d-flex flex-row align-items-center justify-content-start">
      <div class="logo">
        <a href="#">
          <div class="d-flex flex-row align-items-center justify-content-start">
            <div><img src="<?= base_url() . $setup['logo_perusahaan'] ?>" width="40px" alt=""></div>
            <div><?= $setup['nama_perusahaan'] ?></div>
          </div>
        </a>
      </div>
      <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      <nav class="main_nav">
        <ul class="d-flex flex-row align-items-start justify-content-start">
          <li><a href="<?= base_url('web') ?>">Home</a></li>
        </ul>
      </nav>
      <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">

        <!-- User -->
        <div class="user"><a href="<?= base_url('auth') ?>">
            <div><img src="<?= base_url() ?>assets/main/images/user.svg" alt="https://www.flaticon.com/authors/freepik">
            </div>
          </a></div>
        <!-- Phone -->
        <div class="header_phone d-flex flex-row align-items-center justify-content-start">
          <div>
            <div><img src="<?= base_url() ?>assets/main/images/phone.svg" alt="https://www.flaticon.com/authors/freepik" onclick="contact_us()"></div>
          </div>
          <div onclick="contact_us()">+62 8132-9682-911</div>
        </div>
      </div>
    </div>
  </header>

  <div class="super_container_inner">
    <div class="super_overlay"></div>

    <!-- Products -->

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section_title text-center"><?= $setup['moto'] ?></div>
          </div>
        </div>
        <div class="row page_nav_row">
          <div class="col">
            <div class="page_nav">
              <ul class="d-flex flex-row align-items-start justify-content-center">
                <li class="active"><a href="#">MVP</a></li>
                <li><a href="#">SUV</a></li>
                <li><a href="#">CITY CAR</a></li>
                <!-- <li><a href="#">TRUCK</a></li> -->
              </ul>
            </div>
          </div>
        </div>
        <div class="row products_row">

          <!-- Product -->
          <?php foreach ($mobil as $m) : ?>
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
                      <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center" data-toggle="modal" data-target="#bookModal" optional="supir" data="<?= $m['nama'] ?>" onclick="lanjutKeBooking(this)">
                        <div>
                          <div><img src="<?= base_url() ?>assets/main/images/car-driver.svg" class="svg" alt="">
                            <div>+</div>
                          </div>
                        </div>
                      </div>
                      <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" data-toggle="modal" data-target="#bookModal" data="<?= $m['nama'] ?>" onclick="lanjutKeBooking(this)">
                        <div>
                          <div><img src="<?= base_url() ?>assets/main/images/cart.svg" class="svg" alt="">
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
                      <div class="footer_logo_icon"><img src="<?= base_url() . $setup['logo_perusahaan'] ?>" width="50px" alt=""></div>
                      <div><?= $setup['nama_perusahaan'] ?></div>
                    </div>
                  </a>
                </div>
                <div class="footer_about_text">
                  <p><?= $setup['alamat'] ?></p>
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
                    <li><a href="#">MVP</a></li>
                    <li><a href="#">SUV</a></li>
                    <li><a href="#">CITY CAR</a></li>
                    <!-- <li><a href="category.html">TRUCK</a></li> -->
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
        <h5 class="modal-title" id="bookModalLabel">Pesan Mobil <span id="dengan_supir"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('web/order') ?>" onsubmit="return pesan(this)" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="supir" id="supir">
          <input type="hidden" name="nama" id="nama">
          <div class="form-group">
            <label for="ktp">e-KTP</label>
            <input type="file" readonly class="form-control" name="ktp" id="ktp" required>
          </div>
          <div class="form-group" id="disp_satu">
            <label for="sim">SIM A</label>
            <input type="file" id="sim" name="sim" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="file" id="npwp" name="npwp" class="form-control" required>
          </div>
          <div class="form-group" id="disp_dua">
            <label for="kk">Kartu Keluarga Asli</label>
            <input type="file" class="form-control" id="kk" name="kk" required>
          </div>
          <div class="form-group">
            <label for="user_ig">User ID (Instagram)</label>
            <input type="text" class="form-control" id="user_ig" name="user_ig" required>
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
<?php if ($this->session->flashdata('sukses')) : ?>
  <script>
    var pesan_sukses = function() {
      swal.fire("Berhasil dipesan", "Terimakasih telah order", "success");
      // alert("Ditambahkan ke dalam keranjang")
    }

    pesan_sukses();
  </script>
<?php elseif ($this->session->flashdata('gagal')) : ?>
  <script>
    var pesan_gagal = function() {
      swal.fire("Gagal dipesan", "Silahkan coba lagi", "warning");
    }

    pesan_gagal();
  </script>
<?php elseif ($this->session->flashdata('hapus')) : ?>
  <script>
    var pesan_hapus = function() {
      alert("Mobil berhasil dihapus dari keranjang");
    }

    pesan_hapus();
  </script>
<?php endif; ?>

<script>
  var lanjutKeBooking = function(x) {
    let nama = document.getElementById('nama');
    let disp_satu = document.getElementById("disp_satu");
    let disp_dua = document.getElementById("disp_dua");
    let ds = document.getElementById("dengan_supir");
    let supir = document.getElementById("supir");
    if (x.getAttribute('optional')) {

      disp_satu.style.display = "none";
      disp_dua.style.display = "none";

      ds.innerText = "dengan Supir";
      supir.value = x.getAttribute('optional');
    } else {
      ds.innerText = "";

      disp_satu.style.display = "block";
      disp_dua.style.display = "block";
    }
    nama.value = x.getAttribute('data');
  }

  var pesan = function(x) {
    console.log(x);
    let ig = x.user_ig.value;
    let mobil = x.nama.value;
    window.open(`http://api.whatsapp.com/send?phone=6281329682911&text=Halo _Jogja_ _One_ _Day_ _Trip_, Saya dengan, %0a *ID* *IG* : _*${ig}*_ %0a Dengan Mobil _*${mobil}*_ Mohon info _PRICELIST_ nya Terimakasih.`, "_blank");

    return true;
  }

  var contact_us = function() {
    window.open("http://api.whatsapp.com/send?phone=6281329682911&text=halo%20gan", "_blank");
  }
</script>