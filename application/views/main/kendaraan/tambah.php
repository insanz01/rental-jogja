<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Tambah Data Kendaraan
        </div>
        <div class="card-body">
          <form action="<?= base_url('kendaraan/tambah') ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6 col-sm-12 col-xs-12">
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
                  <select name="jenis" id="jenis" class="form-control">
                    <option value="CITY CAR">CITY CAR</option>
                    <option value="SUV">SUV</option>
                    <option value="MVP">MVP</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="gambar">Foto Kendaraan</label>
                  <input type="file" class="form-control" name="gambar" id="gambar">
                </div>
                <div class="form-group">
                  <label for="harga">Harga Sewa</label>
                  <input type="number" class="form-control" name="harga" id="harga">
                </div>
              </div>
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