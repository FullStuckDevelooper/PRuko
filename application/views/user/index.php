  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1>Daftar Ruangan</h1>
          </div>
          <table class="table">
            <thead>
              <tr>
                <td>No</td>
                <td>Nama Ruangan</td>
                <td>Kode Ruangan</td>
                <td colspan="2">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; ?>
              <?php foreach ($query->result() as $row) { ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $row->nama_ruangan; ?></td>
                  <td><?= $row->kode_ruangan; ?></td>
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
                <h1>Tambah Ruangan</h1>
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="nama_ruangan" id="nama_ruangan" placeholder="Nama Ruangan">
              </div>
              <div class="form-group">
                <input class="input form-control" type="text" name="kode_ruangan" id="kode_ruangan" placeholder="Kode Ruangan">
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