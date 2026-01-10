<h3>Admin Users</h3>

<form method="post" action="<?= base_url('admin/users/store') ?>" class="row g-2 mb-3">

    <input class="form-control col" name="name" placeholder="Name">
    <input class="form-control col" name="email">
    <input class="form-control col" type="password" name="password">

    <select class="form-control col" name="role">
        <option value="admin">Admin</option>
        <option value="superadmin">Super Admin</option>
    </select>

    <button class="btn btn-primary col">Add</button>
</form>

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($users as $u): ?>
        <tr>
            <td><?= $u->name ?></td>
            <td><?= $u->email ?></td>
            <td><?= $u->role ?></td>
            <td>
                <a onclick="return confirm('Hapus?')"
                    href="<?= base_url('admin/users/delete/' . $u->id) ?>"
                    class="btn btn-danger btn-sm">Del</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>