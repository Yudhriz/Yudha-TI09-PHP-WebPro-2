<?php
require_once 'dbkoneksi.php';
?>
<?php
include_once 'top.php';
include_once 'menu.php';
?>
<form class="mt-4" method="POST" action="proses_beli.php">
    <div class="form-group row mb-2">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="produk_id" class="col-4 col-form-label">Produk ID</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="produk_id" name="produk_id" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="jumlah" name="jumlah" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="harga" name="harga" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="vendor_id" class="col-4 col-form-label">Vendor ID</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="vendor_id" name="vendor_id" type="text" class="form-control">
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