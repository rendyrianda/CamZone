<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container" style="margin-top: 40px">
      <div class="jumbotron" style="background-color: #dedee3">
      <h1><center>Tambah Data Kamera</center></h1>
        <div class="col-md-12">
            <?php echo form_open('kamera/simpan') ?>

              <div class="form-group">
                <label for="text">Harga Kamera</label>
                <input type="text" name="harga_kamera" class="form-control" placeholder="Masukkan Harga Kamera">
              </div>

              <div class="form-group">
                <label for="text">Nama Kamera</label>
                <input type="text" name="nama_kamera" class="form-control" placeholder="Masukkan Nama Kamera">
              </div>

              <div class="form-group">
                <label for="text">Tanggal Rilis</label>
                <input type="date" name="tanggal_rilis" class="form-control" >
              </div>

              <div class="form-group">
                <label for="text">Jenis Kamera</label>
                <input type="text" name="jenis" class="form-control" >
              </div>
              
              <center><button type="submit" class="btn btn-md btn-primary">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">Reset</button></center>
            <?php echo form_close() ?>
        </div>
    </div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>