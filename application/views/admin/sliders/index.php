<h3>Home Slider</h3>

<form method="post" enctype="multipart/form-data"
    action="<?= base_url('admin/sliders/store') ?>" class="mb-3">

    <input class="form-control mb-2" name="title" placeholder="Slider Title">
    <input type="file" class="form-control mb-2" name="image">
    <button class="btn btn-primary">Upload</button>
</form>

<div class="row">
    <?php foreach ($sliders as $s): ?>
        <div class="col-md-3 text-center mb-3">
            <img class="img-fluid" src="<?= base_url('uploads/sliders/' . $s->image) ?>">
            <p><?= $s->title ?></p>
            <a class="btn btn-sm btn-danger"
                href="<?= base_url('admin/sliders/delete/' . $s->id) ?>">Delete</a>
        </div>
    <?php endforeach ?>
</div>