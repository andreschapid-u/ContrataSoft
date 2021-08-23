<?php
if (!isset($_REQUEST['opcion'])) {
    $_REQUEST['opcion'] = 'contenido';
}
?>

<div id="section" class="row">
    <div class="nav col-sm-3 col-md-3 col-lg-2 list-group-item">
        <?php include 'nav.php'; ?>
    </div>

    <div class="nav clearfix visible-sm-block"></div>
    <div id="section" class="col-md-9">
        <section>
            <?php include $_REQUEST['opcion'] . ".php"; ?>
        </section>
    </div>
</div>