<div class="container py-5">
    <h2 class="mb-4">Our Services</h2>
    <div class="row g-4">


        <?php foreach ($services as $s): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">

                    <?php if ($s->image): ?>
                        <img class="card-img-top"
                            src="<?= base_url('uploads/services/' . $s->image) ?>">
                    <?php endif ?>

                    <div class="card-body">
                        <h5><?= $s->title ?></h5>
                        <div><?= $s->description ?></div>
                    </div>

                </div>
            </div>
        <?php endforeach ?>

        <!-- <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">Web Development</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">Mobile App</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <div class="card-body">IT Consulting</div>
            </div>
        </div> -->
    </div>
</div>