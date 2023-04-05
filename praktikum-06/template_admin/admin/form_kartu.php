<?php
require_once 'dbkoneksi.php';
?>
<?php
include_once 'top.php';
include_once 'menu.php';
?>
<form class="mt-4" method="POST" action="proses_kartu.php">
    <div class="form-group row mb-2">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="kode" name="kode" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nama" class="col-4 col-form-label">Nama Kartu</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="diskon" class="col-4 col-form-label">Diskon</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="diskon" name="diskon" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="iuran" class="col-4 col-form-label">Iuran</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="iuran" name="iuran" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
        <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                echo 'Update';
            } else {
                echo 'Simpan';
            } ?>" />
        </div>
    </div>
    <input type="hidden" name="idedit" value="<?php echo isset($_GET['idedit']) ? $_GET['idedit'] : ''; ?>">
</form>
<?php
include_once 'bottom.php';
?>