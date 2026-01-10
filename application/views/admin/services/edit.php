<h3>Edit Service</h3>

<form method="post" enctype="multipart/form-data"
    action="<?= base_url('admin/services/update/' . $s->id) ?>">

    <input class="form-control mb-2" name="title" value="<?= $s->title ?>">

    <textarea id="editor" class="form-control mb-2" name="description">
    <?= $s->description ?>
    </textarea>

    <?php if ($s->image): ?>
        <img width="120" src="<?= base_url('uploads/services/' . $s->image) ?>">
    <?php endif ?>

    <input type="file" class="form-control mb-2" name="image">
    <input type="hidden" name="old_image" value="<?= $s->image ?>">

    <button class="btn btn-primary">Update</button>
</form>