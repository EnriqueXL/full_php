<?php
    include("./conexion.php");

    $querySelect = "SELECT * FROM task";
    $result_tasks = mysqli_query($conexion, $querySelect);

?>