<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          Transaksi
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
                <th>No</th>
                <th>Kode</th>
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
                    <td class="font-weight-bold"><?= $t['kode_ref'] ?></td>
                    <td><?= $t['plat_nomor'] ?></td>
                    <td><?= $t['nama'] ?></td>
                    <td><?= $t['tanggal_pesan'] ?></td>
                    <td><?= $t['tanggal_kembalikan'] ?></td>
                    <td><?= $t['status'] ?></td>
                    <td>
                      <a href="#" class="btn btn-danger btn-sm">
                        <i class="fas fa-fw fa-trash"></i>
                      </a>
                      <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailModal" plat="<?= $t['plat_nomor']; ?>" nama="<?= $t['nama'] ?>" pesan="<?= $t['tanggal_pesan'] ?>" kembali="<?= $t['tanggal_kembalikan'] ?>" status="<?= $t['status'] ?>" kode="<?= $t['kode_ref'] ?>" onclick="dapatkanDetail(this)">
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


<!-- Modal -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Detail Transaksi <span class="text-primary" id="kode_atas"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('transaksi/ubah_status') ?>" method="POST">
        <input type="hidden" id="kode_ref" name="kode_ref">
        <div class="modal-body">
          <table class="table">
            <tr>
              <td>Plat Nomor Kendaraan:</td>
              <td><span id="plat"></span></td>
            </tr>
            <tr>
              <td>Nama Pemesan:</td>
              <td><span id="nama"></span></td>
            </tr>
            <tr>
              <td>Tanggal Ambil:</td>
              <td><span id="ambil"></span></td>
            </tr>
            <tr>
              <td>Tanggal Kembali:</td>
              <td><span id="kembali"></span></td>
            </tr>
            <tr>
              <td>Status:</td>
              <td><span id="status"></span></td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Ubah Status</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  var dapatkanDetail = function(x) {
    console.log(x)

    let kode_ref = document.getElementById('kode_ref'); // input type hidden

    let kode_atas = document.getElementById('kode_atas');
    let plat = document.getElementById('plat');
    let nama = document.getElementById('nama');
    let ambil = document.getElementById('ambil');
    let kembali = document.getElementById('kembali');
    let status = document.getElementById('status');

    kode_ref.value = x.getAttribute('kode');

    kode_atas.innerText = x.getAttribute('kode');
    plat.innerText = x.getAttribute('plat');
    nama.innerText = x.getAttribute('nama');
    ambil.innerText = x.getAttribute('pesan');
    kembali.innerText = x.getAttribute('kembali');
    status.innerText = x.getAttribute('status');
  }
</script>