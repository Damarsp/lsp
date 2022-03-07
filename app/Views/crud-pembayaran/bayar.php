<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Bayar Spp</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/pembayaran/update" method="POST">
                    <?php

                    if ($pembayaran->id_pembayaran == TRUE) {
                        echo "<input type=text name=id value='{$pembayaran->id_pembayaran}' style='display:none'>";
                    }

                    ?>
                    <div class="form-group row">
                        <label for="id_bayar" class="col-4 col-form-label">Id Pembayaran</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_bayar" id="id_bayar" placeholder="ID Bayar" value="<?= $pembayaran->id_pembayaran ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_petugas" class="col-4 col-form-label">ID Petugas</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="id_petugas" id="id_petugas" placeholder="ID Petugas" value="<?= $pembayaran->id_petugas ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nisn" class="col-4 col-form-label">Nisn</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?= $pembayaran->nisn ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_bayar" class="col-4 col-form-label">Tanggal Bayar</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar" placeholder="Tanggal Bayar" value="<?= $pembayaran->tgl_bayar ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_spp" class="col-4 col-form-label">Id Spp</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_spp" id="id_spp" placeholder="Id Spp" value="<?= $pembayaran->id_spp ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah_bayar" class="col-4 col-form-label">Jumlah Bayar</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="jumlah_bayar" id="jumlah_bayar" placeholder="Jumlah Bayar" value="<?= $pembayaran->jumlah_bayar ?>" readonly>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Bayar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>