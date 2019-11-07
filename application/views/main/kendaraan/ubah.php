<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Ubah Data Kendaraan
        </div>
        <div class="card-body">
          <form action="<?= base_url('kendaraan/ubah/') . $id ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="plat">Plat Nomor</label>
                  <input type="text" class="form-control" name="plat_nomor" id="plat" value="<?= $kendaraan['plat_nomor'] ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Mobil</label>
                  <input type="text" class="form-control" name="nama" id="nama" value="<?= $kendaraan['nama'] ?>">
                </div>
                <div class="form-group">
                  <label for="kursi">Kursi Penumpang</label>
                  <input type="number" class="form-control" name="kursi" id="kursi" value="<?= $kendaraan['kursi'] ?>">
                </div>
                <div class="form-group">
                  <label for="jenis">Jenis Kendaraan</label>
                  <input type="text" class="form-control" name="jenis" id="jenis" value="<?= $kendaraan['jenis'] ?>">
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <img width="200px" height="150px" src="<?= base_url() . $kendaraan['url'] ?>" alt="<?= $kendaraan['gambar'] ?>">
                </div>
                <div class="form-group">
                  <label for="gambar">Foto Kendaraan</label>
                  <input type="file" class="form-control" id="gambar" name="gambar">
                  <input type="hidden" id="foto" name="foto" value="<?= $kendaraan['gambar'] ?>">
                  <input type="hidden" id="url" name="url" value="<?= $kendaraan['url'] ?>">
                </div>
                <div class="form-group">
                  <label for="harga">Harga Sewa</label>
                  <input type="number" class="form-control" name="harga" id="harga" value="<?= $kendaraan['harga'] ?>">
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