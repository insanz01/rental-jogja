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
          <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="text-center">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <div class="table-responsive-sm table-responsive">
            <table id="tabelku" class="table table-hovered">
              <thead class="text-center">
                <th>#</th>
                <th>Nama</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>Gaji (Rp)</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($karyawan as $k) : ?>
                  <tr class="text-center">
                    <td><?= $i++; ?></td>
                    <td><?= $k['nama'] ?></td>
                    <td><?= $k['nohp'] ?></td>
                    <td><?= $k['alamat'] ?></td>
                    <td><?= number_format($k['gaji'], 0, ',', '.') ?></td>
                    <td>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" onclick="dapatkanData(this)" data="<?= $k['kode'] ?>">
                        <i class="fas fa-fw fa-trash"></i>
                      </button>
                      <a href="<?= base_url('karyawan/ubah/') . $k['kode'] ?>" class="btn btn-info btn-sm">
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
</div>

<!-- Modal -->
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusModalLabel">Ingin menghapus data ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('karyawan/hapus') ?>" method="post">
        <input type="hidden" name="kode" id="kode">
        <div class="modal-body">
          Data akan terhapus dari database ketika kamu tekan 'OK'
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">OK</button>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
  var dapatkanData = function(x) {
    let kode = document.getElementById('kode');
    kode.value = x.getAttribute('data');
    // console.log(kode.value);
  }
</script>