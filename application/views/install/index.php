<h3>Install CMS</h3>
<form method="post" action="<?= base_url('install/process') ?>">

    <h5>Database</h5>
    <input name="db_host" placeholder="localhost">
    <input name="db_user">
    <input name="db_pass">
    <input name="db_name">

    <h5>Admin Account</h5>
    <input name="name">
    <input name="email">
    <input type="password" name="password">

    <button>Install</button>
</form>