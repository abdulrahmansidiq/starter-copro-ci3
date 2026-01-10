<h3>Website Setting</h3>

<form method="post" enctype="multipart/form-data"
    action="<?= base_url('admin/settings/update') ?>">

    <input class="form-control mb-2" name="site_name" value="<?= $set->site_name ?>">

    <input class="form-control mb-2" name="footer_text" value="<?= $set->footer_text ?>">

    Logo:
    <input type="file" class="form-control mb-2" name="logo">

    Favicon:
    <input type="file" class="form-control mb-2" name="favicon">

    <input type="hidden" name="old_logo" value="<?= $set->logo ?>">
    <input type="hidden" name="old_favicon" value="<?= $set->favicon ?>">

    <button class="btn btn-primary">Update</button>
</form>