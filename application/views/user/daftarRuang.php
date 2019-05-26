<h1>Daftar Ruangan</h1>
<div class="card">
    <div class="card-body">
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
                        <td><a class="btn btn-primary" href="<?= base_url('user/form_minjam/' . $row->id); ?>">Pinjam</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>