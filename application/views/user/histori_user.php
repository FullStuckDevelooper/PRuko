<div class="container-fluid">
    <div class="col-md-12">
        <h2 class="mx-auto text-center mb-3">Histori Peminjaman</h2>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Ruangan</th>
                <th>Kode Ruangan</th>
                <th>Tanggal Pinjam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($query->result() as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->kode; ?></td>
                    <td><?= $row->tanggal; ?></td>
                    <?php
                    if ($row->status == 'Ditolak') {
                        echo '<td><button class="btn btn-danger form-control">Ditolak</button></td>';
                    } else if ($row->status == 'Diterima') {
                        echo '<td><button class="btn btn-success form-control">Diterima</button></td>';
                    } else if ($row->status == 'Pending') {
                        echo '<td><button class="btn btn-info form-control">Pending</button></td>';
                    }
                    ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>