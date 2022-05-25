<?php
include("conexion.php");
include("./includes/header.php")
?>

<div class="container p-4">

    <div class="row">
        <div class="col-4">
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

        <div class="col-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Mostrar los datos de la tabla -->
                    <!-- foreach ($result_tasks as $row){ -->
                    <?php
                    include("crud/read.php");
                    while ($row = mysqli_fetch_array($result_tasks)) {   ?>
                        <tr>
                            <td> <?php echo $row['title']; ?> </td>
                            <td> <?php echo $row['description']; ?> </td>
                            <td> <?php echo $row['created_at']; ?> </td>
                            <td>
                                <a href="./crud/edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="./crud/delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php };  ?>
                </tbody>
            </table>
        </div>
    </div>

</div>


<?php
include("./includes/footerScripts.php");
?>