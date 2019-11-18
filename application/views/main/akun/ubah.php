<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto col-sm-12">
      <div class="card">
        <div class="card-header">
          Ubah Password
        </div>
        <div class="card-body">
          <form action="<?= base_url('Account/ubah/' . $id) ?>" method="post">
            <div class="form-group">
              <label for="old_p">Password Lama</label>
              <input type="password" id="old_password" name="old_password" class="form-control">
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="old_p">Password Baru</label>
                  <input type="password" id="new_password" name="new_password" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="old_p">Ketik ulang Password Baru</label>
                  <input type="password" id="new_password2" name="new_password2" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>