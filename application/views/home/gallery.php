<div class="container py-5">
    <h3>Gallery</h3>
    <div class="row">
        <?php foreach ($gallery as $g): ?>
            <div class="col-md-3 mb-3">
                <img class="img-fluid rounded"
                    src="<?= base_url('uploads/gallery/' . $g->image) ?>">
            </div>
        <?php endforeach ?>
    </div>
</div>