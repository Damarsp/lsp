<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Ubah Data Spp</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/dataspp/update" method="POST">
                    <?php

                    if ($spp->id_spp == TRUE) {
                        echo "<input type=text name=id value='{$spp->id_spp}' style='display:none'>";
                    }

                    ?>

                    <div class="form-group row">
                        <label for="id_spp" class="col-4 col-form-label">Id Spp</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_spp" id="id_spp" placeholder="Id Spp" value="<?= $spp->id_spp ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class=" col-4 col-form-label">Tahun</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?= $spp->tahun ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nominal" class="col-4 col-form-label">Nominal</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="nominal" id="nominal" placeholder="Nominal" value="<?= $spp->nominal ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Ubah Data Spp</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>