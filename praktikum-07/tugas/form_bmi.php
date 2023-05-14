<!DOCTYPE html>
<html>

<head>
    <title>Form Isian Indeks Masa Tubuh (BMI)</title>
    <!-- Link ke stylesheet Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-sm-12 mx-auto">
                <div class="card shadow-lg border-0 rounded-lg mt-4">
                    <div class="card-body">
                        <h1 class="text-center my-4">Form Isian Indeks Masa Tubuh (BMI)</h1>
                        <form method="post" action="output_bmi.php">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-user"></i>
                                        </div>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="berat" class="col-sm-4 col-form-label">Berat Badan</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-weight"></i>
                                        </div>
                                        <input type="number" class="form-control" id="berat" name="berat" aria-describedby="addon1">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" id="addon1">kg</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tinggi" class="col-sm-4 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-arrows-v"></i>
                                        </div>
                                        <input type="number" class="form-control" id="tinggi" name="tinggi" aria-describedby="addon2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" id="addon2">cm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-birthday-cake"></i>
                                        </div>
                                        <input type="number" class="form-control" id="umur" name="umur">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jk" class="col-sm-4 col-form-label">Jenis kelamin</label>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-laki">
                                                <label class="form-check-label" for="jk1">
                                                    Laki-laki
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan">
                                                <label class="form-check-label" for="jk2">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8 offset-sm-4">
                                    <button type="submit" name="proses" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link ke library Javascript Bootstrap 5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>