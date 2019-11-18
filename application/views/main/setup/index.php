<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto col-sm-12">
      <div class="card">
        <div class="card-header">
          Informasi Perusahaan
        </div>
        <div class="card-body">
          <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="text-center">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <form action="<?= base_url('Setup/index') ?>" method="post">
            <div class="row">
              <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <label for="nama">Nama Perusahaan</label>
                  <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="<?= $setup['nama_perusahaan'] ?>">
                </div>
                <div class="form-group">
                  <label for="moto">Motto Perusahaan</label>
                  <input type="text" class="form-control" name="moto" id="moto" value="<?= $setup['moto'] ?>">
                </div>
                <div class="form-group">
                  <label for="nomor">Nomor HP</label>
                  <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" value="<?= $setup['nomor_hp'] ?>">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat Perusahaan</label>
                  <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="4"><?= $setup['alamat'] ?></textarea>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12">
                <div class="form-group">
                  <img src="<?= base_url() . $setup['logo_perusahaan'] ?>" alt="logo perusahaan" width="200px" height="200px">
                </div>
                <div>
                  <label for="logo">Upload Logo</label>
                  <input type="file" name="logo_perusahaan" id="logo_perusahaan" class="logo_perusahaan">
                </div>
              </div>
              <input type="hidden" name="url" value="<?= $setup['logo_perusahaan'] ?>">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>