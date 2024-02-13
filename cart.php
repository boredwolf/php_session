<?php require 'inc/head.php'; ?>
<?php session_start() ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cookies'] as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>    </div>
</section>
<?php require 'inc/foot.php'; ?>
