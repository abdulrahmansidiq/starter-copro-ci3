<h3>Edit SEO</h3>
<form method="post" action="<?= base_url('admin/seo/update/' . $s->id) ?>">

    <input class="form-control mb-2" name="meta_title" value="<?= $s->meta_title ?>" placeholder="Meta Title">

    <textarea class="form-control mb-2" name="meta_desc"><?= $s->meta_desc ?></textarea>

    <textarea class="form-control mb-2" name="meta_keywords"><?= $s->meta_keywords ?></textarea>

    <button class="btn btn-primary">Update</button>
</form>