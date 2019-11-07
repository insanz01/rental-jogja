<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Customer
        </div>
        <div class="card-body">
          <div class="table-responsive-sm table-responsive">
            <table id="tabelku" class="table table-hovered">
              <thead>
                <th>No</th>
                <th>KTP</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($customer as $c) : ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $c['ktp'] ?></td>
                    <td><?= $c['nama'] ?></td>
                    <td><?= $c['nohp'] ?></td>
                    <td><?= $c['alamat'] ?></td>
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
</div>