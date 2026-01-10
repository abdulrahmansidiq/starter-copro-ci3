<div class="container py-5 text-center">
    <h1>Welcome to MyCompany</h1>
    <p class="lead">We provide the best solutions for your business.</p>
    <a class="btn btn-primary">Get Started</a>
</div>

<div id="hero" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <?php $i = 0;
        foreach ($sliders as $s): ?>
            <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                <img class="d-block w-100"
                    src="<?= base_url('uploads/sliders/' . $s->image) ?>">
                <div class="carousel-caption">
                    <h5><?= $s->title ?></h5>
                </div>
            </div>
        <?php $i++;
        endforeach ?>

    </div>
</div>