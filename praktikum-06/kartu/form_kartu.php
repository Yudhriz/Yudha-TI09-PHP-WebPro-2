<?php
require_once 'dbkoneksi.php';
?>

<form method="POST" action="proses_vendor.php">
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="kota" class="col-4 col-form-label">Kota</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="nama" name="kota" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="kontak" class="col-4 col-form-label">Kontak</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="nama" name="kontak" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" class="btn btn-primary" value="Simpan" />
            <input type="submit" name="proses" class="btn btn-primary" value="Update" />
        </div>
    </div>
    <input type="hidden" name="idedit" value="<?php echo isset($_GET['idedit']) ? $_GET['idedit'] : ''; ?>">
</form>