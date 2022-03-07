<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Data Siswa</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Id Kelas</th>
                            <th>Alamat</th>
                            <th>No telp</th>
                            <th>Id Spp</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['nisn'] ?></td>
                                <td><?= $row['nis'] ?></td>
                                <td><?= $row['nama'] ?></td>
                                <td><?= $row['id_kelas'] ?></td>
                                <td><?= $row['alamat'] ?></td>
                                <td><?= $row['no_telp'] ?></td>
                                <td><a href="<?= base_url() ?>/tarif"><?= $row['id_spp'] ?></a></td>
                                <td><a class="btn btn-lg-3 btn-warning" href="<?= base_url() ?>/datasiswa/ubah/<?= $row['nisn']; ?>">Ubah</a></td>
                                <td><a class="btn btn-lg-3 btn-danger" href="<?= base_url() ?>/datasiswa/hapus/<?= $row['nisn']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>