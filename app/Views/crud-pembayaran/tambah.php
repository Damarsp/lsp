<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2 text-center">Tambah Pembayaran</h2>
            <hr>

            <div class="d-flex justify-content-center">
                <?= csrf_field(); ?>
                <form action="<?= base_url() ?>/pembayaran/simpan" method="POST">
                    <div class="form-group row">
                        <label for="id_pembayaran" class="col-4 col-form-label">Id Pembayaran</label>
                        <div class="col-8">
                            <input type="number" class="form-control" name="id_pembayaran" id="id_pembayaran" placeholder="Id Pembayaran">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_petugas" class="col-4 col-form-label mr-3">Id Petugas</label>
                        <select class="form-select form-control col-md-7" aria-label="Default select example" name="id_petugas" id="id_petugas">
                            <?php
                            $db = \Config\Database::connect();
                            $builder = $db->table('petugas');
                            $query = $builder->get();
                            $petugas = $query->getResultArray();
                            ?>
                            <option selected>---</option>
                            <?php foreach ($petugas as $p) : ?>
                                <option value="<?= $p['id_petugas'] ?>"><?= $p['id_petugas'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="nisn" class="col-4 col-form-label mr-3">Nisn</label>
                        <select class="form-select form-control col-md-7" aria-label="Default select example" name="nisn" id="nisn">
                            <?php
                            $db = \Config\Database::connect();
                            $builder = $db->table('siswa');
                            $query = $builder->get();
                            $siswa = $query->getResultArray();
                            ?>
                            <option selected>---</option>
                            <?php foreach ($siswa as $s) : ?>
                                <option value="<?= $s['nisn'] ?>"><?= $s['nisn'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_bayar" class="col-4 col-form-label">Tanggal Bayar</label>
                        <div class="col-8">
                            <input type="date" class="form-control" name="tgl_bayar" id="tgl_bayar" placeholder="Tanggal Bayar">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_spp" class="col-4 col-form-label mr-3">Id Spp</label>
                        <select class="form-select form-control col-md-7" aria-label="Default select example" name="id_spp" id="id_spp">
                            <option value="">Pilih NISN dulu.</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <label for="jumlah_bayar" class="col-4 col-form-label ">Jumlah Bayar</label>
                        <div class="col-8">
                            <select class="form-select form-control col-md-7" aria-label="Default select example" name="jumlah_bayar" id="nominal">
                                <option value="">Pilih NISN</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block" name="submit">Tambah Pembayaran</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#nisn').change(function() {
            let nisn = $('#nisn').val();
            let id_spp = "<?= site_url('pembayaran/get_pembayaran_id'); ?>/" + nisn;
            let nominal = "<?= site_url('pembayaran/get_pembayaran_nominal'); ?>/" + nisn;

            $('#id_spp').load(id_spp);
            $('#nominal').load(nominal);

            return false;
        });
    });
</script>

<?= $this->endSection(); ?>