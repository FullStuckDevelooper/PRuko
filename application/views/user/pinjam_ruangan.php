<?php 
foreach ($query->result() as $row) { ?>
  <div class="container">
    <div class="col-md-12">
      <h1 class="mx-auto text-center mb-3">Form Peminjaman</h1>
    </div>
    <form class="form" method="post" action="<?= base_url('user/pinjam') ?>">
      <div class="form-group row">
        <label for="NamaRuangan" class="col-sm-2 col-form-label">NamaRuangan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="NamaRuangan" placeholder="<?= $row->nama_ruangan ?>" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="Kode Ruangan" class="col-sm-2 col-form-label">Kode Ruangan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Kode Ruangan" placeholder="<?= $row->kode_ruangan; ?>" readonly>
        </div>
      </div>



      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Nama" placeholder="<?= $user['nama']; ?>" readonly>
        </div>
      </div>
      <input type="hidden" id="user_id" name="user_id" value="<?= $user['id']; ?>">
      <input type="hidden" id="ruangan_id" name="ruangan_id" value="<?= $row->id; ?>">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="NIM" placeholder="<?= $user['NIM']; ?>" readonly>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="Jurusan" name="jurusan" placeholder="<?= $user['Jurusan']; ?>" readonly>
        </div>
      </div>

      <div class="form-group row">
        <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tanggal" id="tgl_pinjam" placeholder="Tanggal">
        </div>
      </div>
          <?= $this->session->flashdata('message') ?>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Alasan Pinjam</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="alasan" id="alasan" placeholder="Alasan Pinjam">
        </div>
      </div>


      <div class="form-group row ">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">Pinjam</button>
        </div>
      </div>
    </form>
  </div>

<?php } ?>