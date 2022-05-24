<?php
include("conexion.php");
include("./includes/header.php")
?>

<div class="container p-4">

    <!-- mensaje de guardado -->
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?php echo $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
            <?php echo $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php session_unset(); } ?>

    <div class="col-md-4">
        <div class="card card-body">
            <form action="./crud/create.php" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="task title" autofocus>
                </div>
                <div class="form-group">
                    <textarea name="description" class="form-control" rows="2" placeholder="task description"></textarea>
                </div>
                <!-- save_task lleva el contenido de el formulario -->
            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save">
        </form>
    </div>
    </div>

</div>


<?php
include("./includes/footerScripts.php");
?>