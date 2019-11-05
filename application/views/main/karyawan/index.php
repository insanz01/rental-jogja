<div class="container">
  <div class="row">
    <div class="col-lg-12 py-2">
      <a href="<?= base_url('karyawan/tambah') ?>" class="btn btn-primary float-right">
        Tambah Karyawan
      </a>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Karyawan
        </div>
        <div class="card-body">
          <table id="tabelku" class="table table-hovered">
            <thead>
              <th>No</th>
              <th>Nama</th>
              <th>No HP</th>
              <th>Alamat</th>
              <th>Gaji (Rp)</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($karyawan as $k) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $k['nama'] ?></td>
                  <td><?= $k['nohp'] ?></td>
                  <td><?= $k['alamat'] ?></td>
                  <td><?= $k['gaji'] ?></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-sm">
                      <i class="fas fa-fw fa-trash"></i>
                    </a>
                    <a href="#" class="btn btn-info btn-sm">
                      <i class="fas fa-fw fa-edit"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>