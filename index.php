<?php
include("conexion.php");
include("./includes/header.php")
?>

<div class="container p-4">

    <div class="col-md-4">
    <div class="card card-body">
        <form action="./crud/create.php" method="post">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="task title" autofocus>
            </div>
            <div class="form-group">
                <textarea name="description" class="form-control" rows="2" placeholder="task description"></textarea>
            </div>
            <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save">
        </form>
    </div>
    </div>

</div>


<?php 
    include("./includes/footerScripts.php");
?>