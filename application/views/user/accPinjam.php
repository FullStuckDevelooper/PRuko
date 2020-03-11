
<div class="container">
    <div class="col-md-12">
        <h1 class="mx-auto text-center mb-3">Form Peminjaman</h1>
    </div>
    <div class="form-group row">
        <label for="NamaRuangan" class="col-sm-2 col-form-label">NamaRuangan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="NamaRuangan" placeholder="<?= $query->nama_ruangan; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="Kode Ruangan" class="col-sm-2 col-form-label">Kode Ruangan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Kode Ruangan" placeholder="<?= $query->kode_ruangan; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Nama" placeholder="<?= $query->nama; ?>" readonly>
        </div>
    </div>
    <input type="hidden" id="user_id" name="user_id" value="">
    <input type="hidden" id="ruangan_id" name="ruangan_id" value="">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="NIM" placeholder="<?= $query->NIM; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Jurusan" name="jurusan" placeholder="<?= $query->Jurusan; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="Tanggal" class="col-sm-2 col-form-label">Tanggal Pinjam</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tanggal" id="tgl_pinjam" placeholder="<?= $query->tanggal; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Alasan Pinjam</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="alasan" id="alasan" placeholder="<?= $query->alasan; ?>" readonly>
        </div>
    </div>
    <div class="col-sm-10 offset-sm-2">
        <div class="form-group">
            <div class="row">
                <form action="<?= base_url('user/terima/' . $query->id_pinjam); ?>">
                    <button type="submit" class="btn btn-primary">Terima</button>
                </form>&nbsp;
                <form action="<?= base_url('user/tolak/' . $query->id_pinjam); ?>">
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </form>
            </div>
        </div>
    </div>
</div>