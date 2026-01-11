<!doctype html>
<html>

<head>
    <title>Admin Panel</title>
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>

<body>

    <div class="sidebar">
        <h5 class="text-white p-3">ADMIN PANEL</h5>
        <a href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <a href="<?= base_url('admin/pages') ?>">Pages</a>
        <a href="<?= base_url('admin/services') ?>">Services</a>
        <a href="<?= base_url('admin/gallery') ?>">Gallery</a>
        <a href="<?= base_url('admin/contact') ?>">Contact</a>
        <a href="<?= base_url('admin/messages') ?>">Messages</a>
        <a href="<?= base_url('admin/setting') ?>">Setting</a>
        <a href="<?= base_url('admin/backup') ?>">Backup DB</a>
        <?php $u = $this->session->userdata('admin'); ?>

        <?php if ($u->role == 'superadmin'): ?>
            <a href="<?= base_url('admin/users') ?>">Admin User</a>
        <?php endif ?>

        <a href="<?= base_url('admin/auth/logout') ?>">Logout</a>
    </div>

    <div class="content">