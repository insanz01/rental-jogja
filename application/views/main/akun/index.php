<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto col-sm-12">
      <div class="card">
        <div class="card-header">
          Akun User
        </div>
        <div class="card-body">
          <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="text-center">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <div class="row my-2">
            <div class="col-lg-12">
              <a href="<?= base_url('Account/tambah') ?>" class="btn btn-primary float-right">Tambah Akun</a>
            </div>
          </div>
          <div class="table-responsive table-responsive-sm">
            <table class="table table-hovered table-striped">
              <thead>
                <th>No</th>
                <th>Username</th>
                <th>Tanggal dibuat</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 0; ?>
                <?php foreach ($akun as $a) : ?>
                  <tr>
                    <td><?= ++$i ?></td>
                    <td><?= $a['username'] ?></td>
                    <td><?= date('d/m/Y', strtotime($a['tanggal_dibuat'])) ?></td>
                    <td>
                      <a href="<?= base_url('Account/ubah/') . $a['id'] ?>" class="btn btn-info btn-sm">
                        <i class="fas fa-fw fa-edit"></i>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" onclick="dapatkanData(this)" data="<?= $a['id'] ?>">
                        <i class="fas fa-fw fa-trash"></i>
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
      <form action="<?= base_url('account/hapus') ?>" method="post">
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