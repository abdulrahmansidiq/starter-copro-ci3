<h3>Services</h3>
<a class="btn btn-primary mb-2" href="<?= base_url('admin/services/create') ?>">Tambah</a>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($services as $s): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $s->title ?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="<?= base_url('admin/services/edit/' . $s->id) ?>">Edit</a>
                <a class="btn btn-sm btn-danger" onclick="return confirm('Hapus?')" href="<?= base_url('admin/services/delete/' . $s->id) ?>">Del</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>