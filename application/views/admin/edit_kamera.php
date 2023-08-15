<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 50px">
      <div class="jumbotron" style="background-color: #dedee3">
        <h1><center>Edit Data Kamera</center></h1>
        <div class="col-md-12">
            <?php echo form_open('kamera/update') ?>

              <div class="form-group">
                <label for="text">Harga Kamera</label>
                <input type="text" name="harga_kamera" value="<?php echo $data_kamera->harga_kamera ?>" class="form-control" placeholder="Masukkan Harga Kamera">
                <input type="hidden" value="<?php echo $data_kamera->id_kamera ?>" name="id_kamera">
              </div>

              <div class="form-group">
                <label for="text">Nama Kamera</label>
                <input type="text" name="nama_kamera" value="<?php echo $data_kamera->nama_kamera ?>" class="form-control" placeholder="Masukkan Nama Kamera">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Rilis</label>
                <input type="date" name="tanggal_rilis" value="<?php echo $data_kamera->tanggal_rilis ?>" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Jenis</label>
                <input type="text" name="jenis" value="<?php echo $data_kamera->jenis ?>" class="form-control" >
              </div>
              <center>
              <button type="submit" class="btn btn-md btn-primary">Update</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button></center>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>