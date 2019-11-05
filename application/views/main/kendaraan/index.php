<div class="container">
  <div class="row">
    <div class="col-lg-12 py-2">
      <a href="<?= base_url('kendaraan/tambah') ?>" class="btn btn-primary float-right">
        Tambah Kendaraan
      </a>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Kendaraan
        </div>
        <div class="card-body">
          <table id="tabelku" class="table table-hovered">
            <thead>
              <th>No</th>
              <th>Plat Nomor</th>
              <th>Nama</th>
              <th>Kursi</th>
              <th>Jenis Kendaraan</th>
              <th>Harga Sewa</th>
              <th>Aksi</th>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($kendaraan as $k) : ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $k['plat_nomor'] ?></td>
                  <td><?= $k['nama'] ?></td>
                  <td><?= $k['kursi'] ?></td>
                  <td><?= $k['jenis'] ?></td>
                  <td><?= $k['harga'] ?></td>
                  <td>
                    <a href="#" class="btn btn-danger btn-sm">
                      <i class="fas fa-fw fa-trash"></i>
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