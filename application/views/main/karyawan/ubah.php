<div class="container">
  <div class="row">
    <div class="col-lg-7 mx-auto">
      <div class="card">
        <div class="card-header">
          Ubah Data Karyawan
        </div>
        <div class="card-body">
          <form action="<?= base_url('karyawan/ubah/') . $id ?>" method="post">
            <div class="form-group">
              <label for="nama">Nama Karyawan</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= $karyawan['nama'] ?>">
            </div>
            <div class="form-group">
              <label for="nomor">Nomor HP</label>
              <input type="text" class="form-control" name="nomor" id="nomor" value="<?= $karyawan['nohp'] ?>">
            </div>
            <div class="form-group">
              <label for="gaji">Gaji Karyawan</label>
              <input type="number" class="form-control" name="gaji" id="gaji" value=<?= $karyawan['gaji'] ?>>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat Karyawan</label>
              <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="4"><?= $karyawan['alamat'] ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>