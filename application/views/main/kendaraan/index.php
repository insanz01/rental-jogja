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
          <?php if ($this->session->flashdata('pesan')) : ?>
            <div class="text-center">
              <?= $this->session->flashdata('pesan'); ?>
            </div>
          <?php endif; ?>
          <div class="table-responsive-sm table-responsive">
            <table id="tabelku" class="table table-hovered">
              <thead class="text-center">
                <th>#</th>
                <th>Plat Nomor</th>
                <th>Nama</th>
                <th>Kursi</th>
                <th>Jenis Kendaraan</th>
                <th>Gambar</th>
                <th>Harga Sewa</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kendaraan as $k) : ?>
                  <tr class="text-center">
                    <td><?= $i++; ?></td>
                    <td><?= $k['plat_nomor'] ?></td>
                    <td><?= $k['nama'] ?></td>
                    <td><?= $k['kursi'] ?></td>
                    <td><?= $k['jenis'] ?></td>
                    <td>
                      <a href="<?= base_url() . $k['url'] ?>" target="_blank">
                        <img src="<?= base_url() . $k['url'] ?>" alt="" width="32" height="32">
                      </a>
                    </td>
                    <td><?= number_format($k['harga'], 0, ',', '.') ?></td>
                    <td>
                      <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" onclick="dapatkanData(this)" data="<?= $k['plat_nomor'] ?>" url="<?= $k['url'] ?>">
                        <i class="fas fa-fw fa-trash"></i>
                      </button>
                      <a href="<?= base_url('kendaraan/ubah/') . $k['plat_nomor'] ?>" class="btn btn-info btn-sm">
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
      <form action="<?= base_url('kendaraan/hapus') ?>" method="post">
        <input type="hidden" name="kode" id="kode">
        <input type="hidden" name="url_foto" id="url">
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
    let url_foto = document.getElementById('url');
    kode.value = x.getAttribute('data');
    url_foto.value = x.getAttribute('url');
    console.log(kode.value);
  }
</script>