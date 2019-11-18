<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto col-sm-12">
      <div class="card">
        <div class="card-header">
          Tambah Akun
        </div>
        <div class="card-body">
          <form action="<?= base_url('Account/tambah') ?>" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control">
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