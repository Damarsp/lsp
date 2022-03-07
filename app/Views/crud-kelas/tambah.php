<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Tambah Data Kelas</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/kelas/simpan" method="POST">
                    <div class="form-group row">
                        <label for="id_kelas" class="col-4 col-form-label">Id Kelas</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="Id Kelas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_kelas" class="col-4 col-form-label">Nama Kelas</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kopetensi_keahlian" class="col-4 col-form-label">Kopetensi Keahlian</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="kopetensi_keahlian" id="kopetensi_keahlian" placeholder="Kopetensi Keahlian">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Tambah Data Kelas</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>