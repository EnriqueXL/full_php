<?php
include("../conexion.php");

if (isset($_GET)) {
    $id = $_GET['id'];
    $queryEdit = "SELECT * FROM task WHERE id = $id";
    $result = mysqli_query($conexion, $queryEdit);

    /* Si existe un registro */
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $description = $row['description'];
    }
}

if (isset($_POST['update'])) {

    /* Se obtiene a traves de get (Arriba) */
    $id = $_GET['id'];

    /* Se obtienen a traves de post (Del formulario de abajo) */
    $title = $_POST['title'];
    $description = $_POST['description'];

    $queryUpdate = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
    $result = mysqli_query($conexion, $queryUpdate);

    if (!$result) {
        die("error in update");
    }
    echo '<script type="text/javascript">alert("Update success!");window.location.href="../index.php";</script>';
}
?>

<?php include("../includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input read_only="read_only" type="text" name="title" value"<?php echo $title; ?>" class="form-control" placeholder="<?php echo $title; ?>">
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="<?php echo $description; ?>"></textarea>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-success" name="update">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../includes/footerScripts.php") ?>