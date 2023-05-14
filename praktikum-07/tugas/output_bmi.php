<!DOCTYPE html>
<html>

<head>
    <title>Output Indeks Masa Tubuh (BMI)</title>
    <!-- Link ke stylesheet Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        fieldset.scheduler-border {
            border: 1px groove #000 !important;
            padding: 0 1.4em 1.4em !important;
            margin: 0 0 1.5em 0 !important;
            -webkit-box-shadow: 0px 0px 0px 0px #000;
            box-shadow: 0px 0px 0px 0px #000;
            width: 100%;
        }

        legend.scheduler-border {
            font-size: 1.2em !important;
            font-weight: bold !important;
            text-align: left !important;
        }
    </style>
</head>

<body>
    <?php
    require_once 'class_bmipasien.php';

    $daftar_pasien = array();

    // jika tombol submit ditekan
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $jenis_kelamin = $_POST['jk'];
        $berat = $_POST['berat'];
        $tinggi = $_POST['tinggi'];

        // buat objek BmiPasien baru
        $pasien = new BmiPasien($nama, $umur, $jenis_kelamin, $berat, $tinggi);

        // tampilkan hasil BMI dan status BMI pada layar

        echo '<div class="container mt-5">';
        echo '<div class="row">';
        echo '<div class="col-lg-6  mx-auto">';
        echo '<h3 class="text-center mb-4">Output Form</h3>';
        echo '<fieldset class="scheduler-border">';
        echo '<h4 class="text-center my-4">Hasil Evaluasi BMI</h4>';
        echo '<div class="row mb-2">';
        echo '<div class="col-sm-4">Nama</div>';
        echo '<div class="col-sm-8">: ' . $pasien->nama . ' (' . $pasien->jenis_kelamin . ')</div>';
        echo '</div>';
        echo '<div class="row mb-2">';
        echo '<div class="col-sm-4">Berat/Tinggi Badan</div>';
        echo '<div class="col-sm-8">: ' . $pasien->berat . ' kg' . '/' . $pasien->tinggi . ' cm</div>';
        echo '</div>';
        echo '<div class="row mb-2">';
        echo '<div class="col-sm-4">Umur</div>';
        echo '<div class="col-sm-8">: ' . $pasien->umur . ' Tahun</div>';
        echo '</div>';
        echo '<div class="row mb-2">';
        echo '<div class="col-sm-4">BMI</div>';
        echo '<div class="col-sm-8">: ' . number_format($pasien->hasilBMI(), 2) . '</div>';
        echo '</div>';
        echo '<div class="row mb-2">';
        echo '<div class="col-sm-4">Hasil</div>';
        echo '<div class="col-sm-8">: ' . $pasien->statusBMI() . '</div>';
        echo '</div>';
        echo '</fieldset>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    $daftar_pasien[] = $pasien;
    ?>
</body>

</html>