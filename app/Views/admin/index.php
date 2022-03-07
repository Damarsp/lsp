<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Welcome, <?= user()->username; ?></h1>

</div>

<?= $this->endSection(); ?>