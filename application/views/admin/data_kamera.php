<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel = "icon" type = "image/png" href = "<?= base_url('assets/'); ?>img/icon1.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

    <div class="container" style="margin-top: 4px">
        <div class="jumbotron" style="background-color: #dedee3">
        <h1><center>Data Tabel Kamera</center></h1>
        <?php echo $this->session->flashdata('notif') ?>
        <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout" type="submit" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a>
        <center><a href="<?php echo base_url() ?>index.php/kamera/tambah/" class="btn btn-md btn-primary">Tambah Data Kamera</a></center>
        <hr>
        <!-- table -->
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Harga Kamera</th>
                    <th>Nama Kamera</th>
                    <th>Tanggal Rilis</th>
                    <th>Jenis Kamera</th>
                    <th>Options</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                    $no = 1; 
                    foreach($data_kamera as $hasil){ 
                ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $hasil->harga_kamera ?></td>
                    <td><?php echo $hasil->nama_kamera ?></td>
                    <td><?php echo $hasil->tanggal_rilis ?></td>
                    <td><?php echo $hasil->jenis ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>index.php/kamera/edit/<?php echo $hasil->id_kamera ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="<?php echo base_url() ?>index.php/kamera/hapus/<?php echo $hasil->id_kamera ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                  </tr>

                <?php } ?>

                </tbody>
              </table>
        </div>

    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
    $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>