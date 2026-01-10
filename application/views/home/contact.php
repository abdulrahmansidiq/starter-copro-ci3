<h3>Contact Us</h3>

<p><?= $c->address ?></p>
<p>Email: <?= $c->email ?></p>
<p>Telp: <?= $c->phone ?></p>

<div><?= $c->maps ?></div>

<form method="post" action="<?= base_url('send-message') ?>">

    <input class="form-control mb-2" name="name" placeholder="Name">
    <input class="form-control mb-2" name="email" placeholder="Email">
    <input class="form-control mb-2" name="subject" placeholder="Subject">

    <textarea class="form-control mb-2" name="message" placeholder="Message"></textarea>

    <button class="btn btn-primary">Send</button>

</form>