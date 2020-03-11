<h1>Daftar Ruangan</h1>
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Ruangan</td>
                    <td>Kode Ruangan</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($query->result() as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama_ruangan; ?></td>
                        <td><?= $row->kode_ruangan; ?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>