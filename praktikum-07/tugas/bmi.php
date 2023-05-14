<!DOCTYPE html>
<html>

<head>
    <title>Data BMI Pasien</title>
    <!-- Link ke stylesheet Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    
                <h1 class="mb-4">Data BMI Pasien</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Berat (Kg)</th>
                            <th scope="col">Tinggi (Cm)</th>
                            <th scope="col">BMI</th>
                            <th scope="col">Hasil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'class_bmipasien.php';

                        // buat array kosong untuk menyimpan objek BmiPasien
                        $daftar_pasien = array();

                        // contoh data dummy
                        $daftar_pasien[] = new BmiPasien('Rosalie Naurah', 18, 'Perempuan', 46.2, 155);
                        $daftar_pasien[] = new BmiPasien('Rara Wulan', 20, 'Perempuan', 42.8, 158);
                        $daftar_pasien[] = new BmiPasien('Glagah Putih', 22, 'Laki-laki', 90.3, 154);

                        // loop untuk menampilkan data pasien pada tabel
                        $no = 1;
                        foreach ($daftar_pasien as $pasien) {
                            echo '<tr>';
                            echo '<th scope="row">' . $no . '</th>';
                            echo '<td>' . $pasien->nama . '</td>';
                            echo '<td>' . $pasien->jenis_kelamin . '</td>';
                            echo '<td>' . $pasien->umur . ' Tahun</td>';
                            echo '<td>' . $pasien->berat . ' kg</td>';
                            echo '<td>' . $pasien->tinggi . ' cm</td>';
                            echo '<td>' . number_format($pasien->hasilBMI(), 2) . '</td>';
                            echo '<td>' . $pasien->statusBMI() . '</td>';
                            echo '</tr>';
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
</body>

</html>