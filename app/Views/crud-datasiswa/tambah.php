<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Tambah Siswa</h2>
            <hr>
            <?= csrf_field(); ?>
            <form action="<?= base_url('datasiswa/simpan') ?>" method="POST">
                <div class="form-group">
                    <label for="nisn">Nisn</label>
                    <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?= (random_string('numeric', 12)) ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nis">Nis</label>
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="nis" value="<?= (random_string('numeric', 12)) ?>" readonly>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="no_meter">No Meter</label>
                        <input type="text" class="form-control" name="no_meter" id="no_meter" placeholder="No Meter" value="<?= (random_string('numeric', 9)) ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="id_spp">Id Spp</label>
                        <select class="form-select form-control" aria-label="Default select example" name="id_spp" id="id_spp">
                            <option selected>---</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>
                <button ty pe="submit" class="btn btn-info mb-5" name="submit">Tambah Pelanggan Baru</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->endSection(); ?>