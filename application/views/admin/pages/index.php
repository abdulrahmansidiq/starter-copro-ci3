<h3>Content Pages</h3>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Slug</th>
        <th>Title</th>
        <th>Aksi</th>
    </tr>

    <?php $no = 1;
    foreach ($pages as $p): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p->slug ?></td>
            <td><?= $p->title ?></td>
            <td>
                <a class="btn btn-warning btn-sm"
                    href="<?= base_url('admin/pages/edit/' . $p->id) ?>">
                    Edit
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>