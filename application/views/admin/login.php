<!doctype html>
<html>

<head>
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">

                <h4 class="mb-3">Admin Login</h4>

                <?php if ($this->session->flashdata('err')): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('err') ?>
                    </div>
                <?php endif ?>

                <form method="post" action="<?= base_url('admin/auth/login') ?>">
                    <input class="form-control mb-2" name="email" placeholder="Email">
                    <input class="form-control mb-2" type="password" name="password" placeholder="Password">
                    <button class="btn btn-primary w-100">Login</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>