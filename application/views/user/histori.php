<div class="container-fluid">
    <div class="col-md-12">
        <h2 class="mx-auto text-center mb-3">Histori Peminjaman</h2>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama Penyewa</th>
                <th>Tipe Ruko</th>
                <th class="text-center">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($query->result() as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->tipe; ?></td>
                    

                    <?php
                        if ($row->status == 'Ditolak') {
                            echo '<td><button class="btn btn-danger form-control">Ditolak</button></td>';
                        } else if ($row->status == 'Lunas') {
                            echo '<td><button class="btn btn-success form-control">Lunas</button></td>';
                        } else if ($row->status == 'Pending') {
                            echo '<td><a class="btn btn-info form-control" href="' . base_url("user/terima/" . $row->id) . '">' . $row->status . '</a></td>';
                        }
                        ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>