<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Belanja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row py-3">
      <div class="col-md-8">
        <h1>Belanja Online</h1>
        <form class="row" method="POST">
          <div class="col-12 mb-2">
            <label class="form-label">Customer</label>
            <input type="text" class="form-control" name="nama" value="" placeholder="Nama Customer">
          </div>
          <div class="col-12">
            <label class="form-label">Pilih Produk</label>
          </div>
          <div class="col-md-3">
            <input type="radio" name="produk" value="TV"> TV</p>
          </div>
          <div class="col-md-3">
            <input type="radio" name="produk" value="Kulkas"> Kulkas</p>
          </div>
          <div class="col-md-3">
            <input type="radio" name="produk" value="Mesin Cuci"> Mesin Cuci</p>
          </div>
          <div class="col-12 mb-2">
            <label class="form-label">Jumlah</label>
            <input type="text" class="form-control" name="jumlah" value="" placeholder="Jumlah">
          </div>
          <div class="col-1 pb-2">
            <input type="submit" value="Kirim" name="proses" class="btn btn-primary px-4">
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="list-group">
          <li class="list-group-item list-group-item-action active" aria-current="true">
            Daftar Harga
          </li>
          <li class="list-group-item list-group-item-action">TV : 4.200.000</li>
          <li class="list-group-item list-group-item-action">Kulkas : 3.100.000</li>
          <li class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</li>
          <li class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</li>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
          error_reporting(0);
          $proses = $_POST['proses'];
          $nama = $_POST['nama'];
          $produk = $_POST['produk'];
          $jumlah = $_POST['jumlah'];
          
          if(!empty($proses)) {
            // echo 'Proses : '. $proses;
            echo '<br>Nama Customer : '. $nama;
            echo '<br>Produk Pilihan : '. $produk;
            echo '<br>Jumlah Beli : '. $jumlah;
          }
          
          if ($produk == 'TV') {
            $harga = 4200000;
          } elseif ($produk == 'Kulkas') {
            $harga = 3100000;
          } elseif ($produk == 'Mesin Cuci') {
            $harga = 3800000;
          }

          $total = $harga * $jumlah;
          
          if (!empty($proses)) {
            echo '<br>Total Belanja : Rp.'. number_format($total, 0, ',', '.') . ",-";
          }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
</body>

</html>