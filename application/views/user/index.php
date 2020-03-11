  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1>Daftar Ruko</h1>
          </div>
          <table class="table">
            <thead>
              <tr>
                <td>No</td>
                <td>Tipe Ruko </td>
                <td>Luas Ruko</td>
                <td>Jumlah Kamar</td>
                <td colspan="2">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($query->result() as $row) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row->tipe; ?></td>
                  <td><?= $row->luas; ?></td>
                  <td><?= $row->kamar; ?></td>
                  <td><a class="btn btn-danger" href="<?= base_url('user/hapus_ruangan/' . $row->id) ?>">delete</a></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <form class="form" method="post" action="<?= base_url('user/tambah_ruangan') ?>">
              <div>
                <h1>Tambah Ruko</h1>
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="tipe" id="tipe" placeholder="Tipe ruko">
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="luas" id="luas" placeholder="Luas Ruko">
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="kamar" id="kamar" placeholder="Jumlah Kamar">
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="harga" id="harga" placeholder="Harga">
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="photo" id="photo" placeholder="photo">
              </div>



              <div class="form-group">
                <button class="btn btn-primary" type="submit" value="submit">tambah ruangan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>