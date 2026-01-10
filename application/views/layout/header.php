<!doctype html>
<html>

<head>
    <title><?= $title ?? 'Company' ?></title>
    <title><?= $seo->meta_title ?? 'Company' ?></title>
    <meta name="description" content="<?= $seo->meta_desc ?>">
    <meta name="keywords" content="<?= $seo->meta_keywords ?>">
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">MyCompany</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/about') ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/services') ?>">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/gallery') ?>">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('home/contact') ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>