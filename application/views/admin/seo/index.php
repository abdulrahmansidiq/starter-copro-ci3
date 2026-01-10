<h3>SEO Manager</h3>
<table class="table table-bordered">
    <tr>
        <th>Page</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($seo as $s): ?>
        <tr>
            <td><?= $s->page ?></td>
            <td>
                <a class="btn btn-sm btn-warning"
                    href="<?= base_url('admin/seo/edit/' . $s->id) ?>">Edit</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>