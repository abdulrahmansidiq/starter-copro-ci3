<h3>Edit Page</h3>

<form method="post" action="<?= base_url('admin/pages/update/' . $p->id) ?>">

    <label>Title</label>
    <input class="form-control mb-2" name="title" value="<?= $p->title ?>">

    <label>Content</label>
    <textarea id="editor" class="form-control mb-3" name="content">
<?= $p->content ?>
</textarea>

    <hr>
    <h5>SEO Settings</h5>

    <label>Meta Title</label>
    <input class="form-control mb-2" name="meta_title" value="<?= $p->meta_title ?>">

    <label>Meta Description</label>
    <textarea class="form-control mb-2" name="meta_description">
<?= $p->meta_description ?>
</textarea>

    <label>Meta Keywords</label>
    <input class="form-control mb-3" name="meta_keywords" value="<?= $p->meta_keywords ?>">

    <button class="btn btn-primary">Save</button>
    <a class="btn btn-secondary" href="<?= base_url('admin/pages') ?>">Back</a>

</form>