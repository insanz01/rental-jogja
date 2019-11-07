<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Transaksi
        </div>
        <div class="card-body">
          <div class="table-responsive-sm table-responsive">
            <table id="tabelku" class="table table-hovered">
              <thead class="text-center">
                <th>No</th>
                <th>Plat Nomor</th>
                <th>Nama Customer</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Kembalikan</th>
                <th>Status</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($transaksi as $t) : ?>
                  <tr class="text-center">
                    <td><?= $i++; ?></td>
                    <td><?= $t['plat_nomor'] ?></td>
                    <td><?= $t['nama'] ?></td>
                    <td><?= $t['tanggal_pesan'] ?></td>
                    <td><?= $t['tanggal_kembalikan'] ?></td>
                    <td><?= $t['status'] ?></td>
                    <td>
                      <a href="#" class="btn btn-danger btn-sm">
                        <i class="fas fa-fw fa-trash"></i>
                      </a>
                      <button type="button" class="btn btn-info btn-sm">
                        <i class="fas fa-fw fa-eye"></i>
                      </button>
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
</div>