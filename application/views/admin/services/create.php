<h3>Tambah Service</h3>

<form method="post" action="<?= base_url('admin/services/store') ?>" enctype="multipart/form-data">

    <input class="form-control mb-2" name="title" placeholder="Title">

    <textarea id="editor" class="form-control mb-2" name="description"></textarea>

    <input type="file" class="form-control mb-2" name="image">

    <button class="btn btn-primary">Simpan</button>
</form>