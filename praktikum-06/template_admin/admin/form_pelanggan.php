<?php
require_once 'dbkoneksi.php';
?>
<?php
include_once 'top.php';
include_once 'menu.php';
?>
<form class="mt-4" method="POST" action="proses_pelanggan.php">
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
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div> -->
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div> -->
                </div>
                <div class="form-check mr-1">
                    <input id="jk" name="jk" value="L" type="radio" class="form-check-input mr-2">Laki-laki
                </div>
                <div class="form-check">
                    <input id="jk" name="jk" value="P" type="radio" class="form-check-input mx-1">Perempuan
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div> -->
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div> -->
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div> -->
                </div>
                <input id="email" name="email" value="" type="email" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="kartu_id" class="col-4 col-form-label">Kartu</label>
        <div class="col-8">
            <?php
            $sqlkartu = "SELECT * FROM kartu";
            $rskartu = $dbh->query($sqlkartu);
            ?>
            <select id="kartu_id" name="kartu_id" class="custom-select">
                <?php
                foreach ($rskartu as $rowkartu) {
                ?>
                    <option value="<?= $rowkartu['id'] ?>"><?= $rowkartu['nama'] ?></option>
                <?php
                }
                ?>

            </select>
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