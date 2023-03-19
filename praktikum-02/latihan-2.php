<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Form Nilai Siswa</h1>
                <form class="row m-5" method="POST">
                    <div class="col-12 mb-2">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="" placeholder="Nama Lengkap">
                    </div>
                    
                    <div class="col-md-12 mb-2">
                        <label for="inputState" class="form-label">Mata Kuliah</label>
                        <select name="matkul" class="form-select">
                            <option value="DDP">Dasar-Dasar Pemrograman</option>
                            <option value="BDI">Basis Data</option>
                            <option value="WEB1">Pemrograman Web</option>
                        </select>
                    <div class="col-12 mb-2">
                        <label class="form-label">Nilai UTS</label>
                        <input type="text" class="form-control" name="nilai_uts" value="" placeholder="Nilai UTS">
                    </div>
                    <div class="col-12 mb-2">
                        <label class="form-label">Nilai UAS</label>
                        <input type="text" class="form-control" name="nilai_uas" value="" placeholder="Nilai UAS">
                    </div>
                    <div class="col-12 mb-2">
                        <label class="form-label">Nilai Tugas/Praktikum</label>
                        <input type="text" class="form-control" name="nilai_tugas" value="" placeholder="Nilai Tugas">
                    </div>
                    <div class="col-md-1 mx-auto mb-2">
                        <input type="submit" value="Simpan" name="proses" class="btn btn-primary px-3">
                    </div>
                </form>
    <br>
    <?php
    error_reporting(0);

    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br>Nama : '.$nama_siswa;
    echo '<br>Mata Kuiah : '.$mata_kuliah;
    echo '<br>Nilai UTS : '.$nilai_uts;
    echo '<br>NIlai UAS : '.$nilai_uas;
    echo '<br>Nilai Tugas Praktikum : '.$nilai_tugas;
    }

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
