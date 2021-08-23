<?php
if (!isset($_REQUEST['opcion'])) {
    $_REQUEST['opcion'] = 'contenido';
}
?>

<div id="section" class="row">
    <div class="nav col-sm-3 col-md-3 col-lg-2 list-group-item">
        <?php include 'nav.php'; ?>
    </div>

    <div class="clearfix visible-xs-block"></div>
    <div class="nav clearfix visible-sm-block"></div>
    <div id="section" class="col-sm-9 col-md-9 col-lg-9" >
        <section>
            <?php include $_REQUEST['opcion'] . ".php"; ?>
        </section>
    </div>
</div>
