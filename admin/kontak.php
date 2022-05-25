<!DOCTYPE html>
<html>
        <?php
    include 'admin/koneksi.inc.php';
    ?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .warning {
            color: red;
        }
    </style>
</head>

<body>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Pengguna
                </div>
                <div class="card-body">
                    <form method="POST" action="simpan_kontak.php">
                        
                        <div class="form-group row">
                            <!-- Nama -->
                            <!--  -->
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Anda" class="warning">
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="form-group row">
                            <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10 ">
                                <input class="form-check-input" type="radio" name="jkel" id="jkel" value="Laki-Laki">
                                <label class="form-check-label" for="jkel">Laki-Laki</label><br>
                                <input class="form-check-input" type="radio" name="jkel" id="jkel" value="Perempuan">
                                <label class="form-check-label" for="jkel">Perempuan</label>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email Anda" class="warning">
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" class="warning">
                            </div>
                        </div>
                        <!-- Kota -->
                        <div class="form-group row">
                            <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <input type="text" name="kota" class="form-control" id="kota" placeholder="Masukkan Kota anda" class="warning">
                            </div>
                        </div>
                        <!-- Pesan -->
                        <div class="form-group row">
                            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                               <input type="text" name="pesan" class="form-control" id="pesan" placeholder="Masukkan Pesan" class="warning">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group row">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary"> Kirim </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>