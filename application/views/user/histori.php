<div class="container-fluid">
    <div class="col-md-12">
        <h2 class="mx-auto text-center mb-3">Histori Peminjaman</h2>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Ruangan</th>
                <th>Tanggal Pinjam</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($query->result() as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->ruangan; ?></td>
                    <td><?= $row->tanggal; ?></td>
                    <?php
                    if ($row->status == 'Ditolak') {
                        echo '<td><button class="btn btn-danger form-control">Ditolak</button></td>';
                    } else if ($row->status == 'Diterima') {
                        echo '<td><button class="btn btn-success form-control">Diterima</button></td>';
                    } else if ($row->status == 'Pending') {
                        echo '<td><a class="btn btn-info form-control" href="'.base_url("user/accPinjam/".$row->id).'">'.$row->status.'</a></td>';
                    }
                    ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>