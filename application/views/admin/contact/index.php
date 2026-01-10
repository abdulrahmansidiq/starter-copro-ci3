<h3>Contact Information</h3>

<form method="post" action="<?= base_url('admin/contact/update') ?>">

    <label>Address</label>
    <textarea class="form-control mb-2" name="address"><?= $c->address ?></textarea>

    <label>Email</label>
    <input class="form-control mb-2" name="email" value="<?= $c->email ?>">

    <label>Phone</label>
    <input class="form-control mb-2" name="phone" value="<?= $c->phone ?>">

    <label>Google Maps Embed</label>
    <textarea class="form-control mb-2" name="maps"><?= $c->maps ?></textarea>

    <label>WhatsApp</label>
    <input class="form-control mb-2" name="whatsapp" value="<?= $c->whatsapp ?>">

    <label>Instagram</label>
    <input class="form-control mb-3" name="instagram" value="<?= $c->instagram ?>">

    <button class="btn btn-primary">Save</button>

</form>