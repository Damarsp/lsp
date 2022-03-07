<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Kelas</h2>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?= base_url() ?>/kelas/tambah" class="btn btn-primary">Tambah</a>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Kopetensi Keahlian</th>
                            <th colspan="3">
                                <div class="text-center">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kelas as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row['id_kelas'] ?></td>
                                <td><?= $row['nama_kelas'] ?></td>
                                <td><?= $row['kopetensi_keahlian'] ?></td>
                                <td><a class="btn btn-lg-3 btn-warning" href="/kelas/ubah/<?= $row['id_kelas']; ?>">Ubah</a></td>
                                <td><a class="btn btn-lg-3 btn-danger" href="/kelas/hapus/<?= $row['id_kelas']; ?>">Hapus</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>