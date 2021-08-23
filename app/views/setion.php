<?php
if (!isset($_REQUEST['opcion'])) {
    $_REQUEST['opcion'] = 'registroUsuario';
}
?>

<div id="section" class="container row">
    <div class="nav col-md-2">
        <?php include 'nav.php'; ?>
    </div>

    <div class="nav clearfix"></div>
    <div id="section" class="col-md-10">
        <section>
            <?php include $_REQUEST['opcion'] . ".php"; ?>
        </section>
    </div>
</div>