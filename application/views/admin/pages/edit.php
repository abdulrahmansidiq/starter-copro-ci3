<h3>Edit Page</h3>

<form method="post" action="<?= base_url('admin/pages/update/' . $p->id) ?>">

    <label>Title</label>
    <input class="form-control mb-2" name="title" value="<?= $p->title ?>">

    <label>Content</label>
    <textarea id="editor" class="form-control mb-2" name="content">
<?= $p->content ?>
</textarea>

    <button class="btn btn-primary">Save</button>

    <a class="btn btn-secondary" href="<?= base_url('admin/pages') ?>">Back</a>

</form>