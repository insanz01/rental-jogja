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
                <th>Instagram ID</th>
                <th>e-KTP</th>
                <th>SIM</th>
                <th>NPWP</th>
                <th>Kartu Keluarga</th>
                <th>Supir</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($transaksi as $t) : ?>
                  <tr class="text-center">
                    <td><?= $i++; ?></td>
                    <td class="font-weight-bold"><?= $t['instagram_id'] ?></td>
                    <td>
                      <a href="<?= base_url() ?>datadiri/<?= $t['ktp'] ?>" target="_blank">
                        <img src="<?= base_url() ?>datadiri/<?= $t['ktp'] ?>" width="50px" heigh="50px" alt="">
                      </a>
                    </td>
                    <td>
                      <?php if (!$t['supir']) : ?>
                        <a href="<?= base_url() ?>datadiri/<?= $t['sim'] ?>" target="_blank">
                          <img src="<?= base_url() ?>datadiri/<?= $t['sim'] ?>" width="50px" heigh="50px" alt="">
                        </a>
                      <?php endif; ?>
                    </td>
                    <td>
                      <a href="<?= base_url() ?>datadiri/<?= $t['npwp'] ?>" target="_blank">
                        <img src="<?= base_url() ?>datadiri/<?= $t['npwp'] ?>" width="50px" heigh="50px" alt="">
                      </a>
                    </td>
                    <td>
                      <?php if (!$t['supir']) : ?>
                        <a href="<?= base_url() ?>datadiri/<?= $t['kk'] ?>" target="_blank">
                          <img src="<?= base_url() ?>datadiri/<?= $t['kk'] ?>" width="50px" heigh="50px" alt="">
                        </a>
                      <?php endif; ?>
                    </td>
                    <td><?= ($t['supir']) ? 'Ya' : 'Tidak' ?></td>
                    <td><?= date('d/m/Y', strtotime($t['tanggal'])) ?></td>
                    <td><?= $t['status'] ?></td>
                    <td>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusModal" onclick="dapatkanData(this)" data="<?= $t['id'] ?>">
                        <i class="fas fa-fw fa-trash"></i>
                      </button>
                      <button type="button" class="btn btn-info btn-sm" ktp="<?= $t['ktp'] ?>" sim="<?= $t['sim'] ?>" npwp="<?= $t['npwp'] ?>" kk="<?= $t['kk'] ?>" kode="<?= $t['id'] ?>" supir="<?= $t['supir'] ?>" data-toggle="modal" data-target="#detailModal" onclick="dapatkanDetail(this)">
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
<div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hapusModalLabel">Ingin menghapus data ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('transaksi/hapus') ?>" method="post">
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
              <td>KTP:</td>
              <td><img id="ktp" width="200px" height="150px"></td>
            </tr>
            <tr id="disp_satu">
              <td>SIM:</td>
              <td><img id="sim" width="200px" height="150px"></td>
            </tr>
            <tr>
              <td>NPWP:</td>
              <td><img id="npwp" width="200px" height="150px"></td>
            </tr>
            <tr id="disp_dua">
              <td>KK:</td>
              <td><img id="kk" width="200px" height="150px"></td>
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

    let ktp = document.getElementById('ktp');
    let sim = document.getElementById('sim');
    let npwp = document.getElementById('npwp');
    let kk = document.getElementById('kk');
    let disp_satu = document.getElementById('disp_satu');
    let disp_dua = document.getElementById('disp_dua');

    let status = document.getElementById('status');

    kode_ref.value = x.getAttribute('kode');

    var link = window.location.href;

    var _link = link.split("transaksi");

    var url = _link[0];

    ktp.setAttribute('src', `${url}datadiri/${x.getAttribute('ktp')}`);
    npwp.setAttribute('src', `${url}datadiri/${x.getAttribute('npwp')}`);

    if (x.getAttribute('supir') == 'supir') {
      disp_satu.style.display = "none";
      disp_dua.style.display = "none";
    } else {
      sim.setAttribute('src', `${url}datadiri/${x.getAttribute('sim')}`);
      kk.setAttribute('src', `${url}datadiri/${x.getAttribute('kk')}`);

      disp_satu.style.display = "block";
      disp_dua.style.display = "block";
    }

    // status.innerText = x.getAttribute('status');
  }
</script>