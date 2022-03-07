<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Ubah Data Siswa</h2>
            <hr>
            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url('datasiswa/update') ?>" method="POST">
                    <?php

                    if ($siswa->nisn == TRUE) {
                        echo "<input type=text name=id value='{$siswa->nisn}' style='display:none'>";
                    }

                    ?>

                    <div class="form-group row">
                        <label for="nisn" class="col-4 col-form-label">Nisn</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Nisn" value="<?= $siswa->nisn ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nis" class=" col-4 col-form-label">Nis</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="nis" id="nis" placeholder="Nis" value="<?= $siswa->nis ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?= $siswa->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_kelas" class="col-4 col-form-label">Id Kelas</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_kelas" id="id_kelas" placeholder="Id Kelas" value="<?= $siswa->id_kelas ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-4 col-form-label">Alamat</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?= $siswa->alamat ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_telp" class="col-4 col-form-label">No Telp</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp" value="<?= $siswa->no_telp ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_spp" class="col-4 col-form-label">Id Spp</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="id_spp" id="id_spp" placeholder="Id Spp" value="<?= $siswa->id_spp ?>">
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success btn-block" name="submit">Ubah Data Kelas</button>
                </form>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>