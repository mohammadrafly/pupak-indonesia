<?= $this->extend('layout/landing') ?>

<?= $this->section('content') ?>
    <?= $this->include('layout/landing/hero') ?>
    <?= $this->include('layout/landing/layanan') ?>
    <?= $this->include('layout/landing/searchbar') ?>
    <?= $this->include('layout/landing/recommendation') ?>
    <?= $this->include('layout/landing/message') ?>
<?= $this->endSection() ?>