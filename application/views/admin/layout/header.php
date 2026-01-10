<!doctype html>
<html>

<head>
    <title>Admin Panel</title>
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <style>
        body {
            min-height: 100vh
        }

        .sidebar {
            width: 230px;
            position: fixed;
            top: 0;
            bottom: 0;
            background: #212529
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px
        }

        .sidebar a:hover {
            background: #343a40
        }

        .content {
            margin-left: 230px;
            padding: 20px
        }
    </style>
</head>

<body>

    <div class="sidebar">
        <h5 class="text-white p-3">ADMIN</h5>
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