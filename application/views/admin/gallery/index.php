<h3>Gallery</h3>

<form method="post" enctype="multipart/form-data"
    action="<?= base_url('admin/gallery/store') ?>" class="mb-3">

    <input class="form-control mb-2" name="caption" placeholder="Caption">
    <input type="file" class="form-control mb-2" name="image">
    <button class="btn btn-primary">Upload</button>
</form>

<div class="row">
    <?php foreach ($gallery as $g): ?>
        <div class="col-md-3 mb-3 text-center">
            <img class="img-fluid" src="<?= base_url('uploads/gallery/' . $g->image) ?>">
            <p><?= $g->caption ?></p>
            <a class="btn btn-sm btn-danger"
                href="<?= base_url('admin/gallery/delete/' . $g->id) ?>">Delete</a>
        </div>
    <?php endforeach ?>
</div>