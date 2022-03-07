<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data SPP</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url() ?>/dataspp/tambah" class="btn btn-primary">Tambah</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Spp</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($spp as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_spp'] ?></td>
                                <td><?= $row['tahun'] ?></td>
                                <td><?= $row['nominal'] ?></td>
                                <td><a class="btn btn-lg-3 btn-warning" href="/dataspp/ubah/<?= $row['id_spp']; ?>">Ubah</a></td>
                                <td><a class="btn btn-lg-3 btn-danger" href="/dataspp/hapus/<?= $row['id_spp']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>