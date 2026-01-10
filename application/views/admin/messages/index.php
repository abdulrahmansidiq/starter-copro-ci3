<h3>Messages</h3>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Date</th>
    </tr>

    <?php $no = 1;
    foreach ($m as $x): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $x->name ?></td>
            <td><?= $x->email ?></td>
            <td><?= $x->subject ?></td>
            <td><?= $x->created_at ?></td>
            <td>
                <a onclick="return confirm('Hapus pesan ini?')"
                    class="btn btn-danger btn-sm"
                    href="<?= base_url('admin/messages/delete/' . $x->id) ?>">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach ?>
</table>