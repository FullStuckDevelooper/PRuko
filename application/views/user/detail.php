<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seko - Sewa Ruko Murah</title>

    <!-- Custom fonts for this theme -->
    <link href="<?php echo base_url(); ?>assets/ruko/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/ruko/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url('user/daftarRuangUser/'); ?>"><i class="fas fa-store-alt"></i> SEKO</a>


    </nav>

    <!-- Masthead -->
    <?php
    foreach ($query->result() as $row) { ?>
        <div class="container">
            <div class="col-md-12">
                <h1 class="mx-auto text-center mb-3">Detail Pemesanan</h1>
            </div>
            <form class="form" method="post" action="<?= base_url('user/pinjam') ?>">
                <div class="form-group row">
                    <label for="NamaRuangan" class="col-sm-2 col-form-label">Penyewa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NamaRuangan" placeholder="<?= $user['nama']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Kode Ruangan" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Kode Ruangan" placeholder="<?= $user['email']; ?>" readonly>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Type Ruko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Nama" placeholder="<?= $row->tipe; ?>" readonly>
                    </div>
                </div>
                <input type="hidden" id="user_id" name="user_id" value="<?= $user['id']; ?>">
                <input type="hidden" id="ruko_id" name="ruko_id" value="<?= $row->id; ?>">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Luas Ruko</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="NIM" placeholder="<?= $row->luas; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Kamar Mandi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Jurusan" name="jurusan" placeholder="<?= $row->kamar; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Jurusan" name="jurusan" placeholder="Rp. <?= $row->harga; ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Lama Penyewaan </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="Jurusan" name="jurusan" placeholder="1 Tahun " readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pembayaran </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="pembayaran" name="pembayaran"> 
                            <option>BCA - 11770501006 AN Seno Tresna</option>
                            <option>Mandiri - 8787878123 AN Pebri Alkautsar</option>
                            <option>BRI - 898989839123 AN Seno Tresna</option>
                            <option>BJB - 8989797912 AN Pebri Alkautsar</option>
                        </select>
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


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ruko/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/ruko/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ruko/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/ruko/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/ruko/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/ruko/js/freelancer.min.js "></script>


</body>

</html>