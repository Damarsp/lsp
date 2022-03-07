<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">History Pembayaran</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h5 class="mt-2">Berikut ini adalah History Pembayaran Anda :</h5>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Pembayaran</th>
                            <th>Id Petugas</th>
                            <th>nisn</th>
                            <th>Taggal Bayar</th>
                            <th>Id Spp</th>
                            <th>Jumlah Bayar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pembayaran as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_pembayaran'] ?></td>
                                <td><a href="<?= base_url() ?>/datapetugas"><?= $row['id_petugas'] ?></a></td>
                                <td><a href="<?= base_url() ?>/datasiswa"><?= $row['nisn'] ?></a></td>
                                <td><?= $row['tgl_bayar']; ?></td>
                                <td><a href="<?= base_url() ?>/dataspp"><?= $row['id_spp'] ?></a></td>
                                <td><?= $row['jumlah_bayar']; ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>