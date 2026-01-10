<h3>Web Settings</h3>

<form method="post" enctype="multipart/form-data"
    action="<?= base_url('admin/setting/update') ?>">

    <label>Company Name</label>
    <input class="form-control mb-2" name="company_name"
        value="<?= $s->company_name ?>">

    <label>Tagline</label>
    <input class="form-control mb-2" name="tagline"
        value="<?= $s->tagline ?>">

    <label>Logo</label><br>
    <?php if ($s->logo): ?>
        <img height="60" src="<?= base_url('uploads/' . $s->logo) ?>"><br>
    <?php endif ?>
    <input type="file" name="logo" class="mb-2">

    <label>Favicon</label><br>
    <?php if ($s->favicon): ?>
        <img height="32" src="<?= base_url('uploads/' . $s->favicon) ?>"><br>
    <?php endif ?>
    <input type="file" name="favicon" class="mb-2">

    <label>Footer Text</label>
    <textarea class="form-control mb-3" name="footer">
<?= $s->footer ?>
</textarea>

    <button class="btn btn-primary">Save</button>

</form>