<?php 

include("../conexion.php");

    /* Validamos si esta llegando lo del form a travez del metodo POST */
if (isset($_POST['save_task'])) {
    /* Obtenemos los valores a travez de post para guardarlos en variables */
    $title       = $_POST['title'];
    $description = $_POST['description'];

    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conexion, $query);

    /* Validación del guardado */
    if (!$result) {
        die("error al guardar");
    }
    header("Location: ../index.php");
}

?>