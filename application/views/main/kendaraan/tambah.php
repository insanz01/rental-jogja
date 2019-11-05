<div class="container">
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="card">
        <div class="card-header">
          Tambah Data Kendaraan
        </div>
        <div class="card-body">
          <form action="<?= base_url('kendaraan/tambah') ?>" method="post">
            <div class="form-group">
              <label for="plat">Plat Nomor</label>
              <input type="text" class="form-control" name="plat_nomor" id="plat">
            </div>
            <div class="form-group">
              <label for="nama">Nama Mobil</label>
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
              <label for="kursi">Kursi Penumpang</label>
              <input type="number" class="form-control" name="kursi" id="kursi">
            </div>
            <div class="form-group">
              <label for="jenis">Jenis Kendaraan</label>
              <input type="text" class="form-control" name="jenis" id="jenis">
            </div>
            <div class="form-group">
              <label for="harga">Harga Sewa</label>
              <input type="number" class="form-control" name="harga" id="harga">
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