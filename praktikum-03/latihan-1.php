<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php
    $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
    $ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
    ?>
    <fieldset class="form-group" style="background-color: bisque;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <legend>Form Registrasi IT Club Data Science</legend>
                    <form class="row" method="POST">
                        <div class="col-12 mb-2">
                            <label class="form-label">NIM</label>
                            <input type="text" class="form-control" name="nim" value="" placeholder="NIM">
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki</p>
                        </div>
                        <div class="col-md-2">
                            <input type="radio" name="jk" value="Perempuan"> Perempuan</p>
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Program Studi</label>
                            <select name="prodi" class="form-select">
                                <?php
                                foreach ($ar_prodi as $key => $value) {
                                    echo "<option value=\"$key\">$value</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Skill Web & Programming</label>
                            <div class="col-md-12">
                                <?php
                                foreach ($ar_skill as $key => $value) {
                                    echo "<input type=\"checkbox\" name=\"skill[$key]\" value=\"$value\"> $key<br>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Tempat Domisili</label>
                            <select name="domisili" class="form-select">
                                <?php
                                foreach ($ar_domisili as $value) {
                                    echo "<option value=\"$value\">$value</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 mb-2">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="" placeholder="Email">
                        </div>
                        <div class="col-1 mx-lg-auto">
                            <input type="submit" value="Simpan" name="proses" class="btn btn-primary px-4">
                        </div>
                    </form>
                    <?php
                    error_reporting(0);

                    $proses = $_POST['proses'];
                    $nim = $_POST['nim'];
                    $nama_siswa = $_POST['nama'];
                    $jenis_kelamin = $_POST['jk'];
                    $prodi = $_POST['prodi'];
                    $skill = $_POST['skill'];
                    $domisili = $_POST['domisili'];
                    $email = $_POST['email'];

                    if (!empty($proses)) {
                        echo '<br>NIM : ' . $nim;
                        echo '<br>Nama : ' . $nama_siswa;
                        echo '<br>Jenis Kelamin : ' . $jenis_kelamin;
                        echo '<br>Program Studi : ' . $prodi;
                        echo '<br>Skill : ' . implode(", ", array_keys($skill));
                        echo '<br>Tempat Domisili : ' . $domisili;
                    }

                    $skor = 0;
                    foreach ($skill as $key => $value) {
                        $skor += $value;
                    }
                    function skor_skill($skor)
                    {
                        if ($skor >= 0 && $skor <= 40) {
                            return "Kurang";
                        } elseif ($skor >= 40 && $skor <= 60) {
                            return "Cukup";
                        } elseif ($skor >= 60 && $skor <= 100) {
                            return "Baik";
                        } elseif ($skor >= 100 && $skor >= 150) {
                            return "Sangat Baik";
                        } else {
                            return "Tidak memadai";
                        }
                    }

                    if (!empty($proses)) {
                        echo '<br>Skor Skill : ' . $skor;
                        echo '<br>Kategori Skill : ' . skor_skill($skor);
                        echo '<br>Email : ' . $email;
                    }

                    ?>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </fieldset>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>