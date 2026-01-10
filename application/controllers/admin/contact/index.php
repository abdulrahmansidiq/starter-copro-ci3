<h3>Contact Info</h3>
<form method="post" action="<?= base_url('admin/contact/update') ?>">
    <textarea class="form-control mb-2" name="address"><?= $c->address ?></textarea>
    <input class="form-control mb-2" name="phone" value="<?= $c->phone ?>">
    <input class="form-control mb-2" name="email" value="<?= $c->email ?>">
    <button class="btn btn-primary">Update</button>
</form>