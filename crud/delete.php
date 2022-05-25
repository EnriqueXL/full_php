<?php

    include("../conexion.php");

    /* Valido si estoy recibiendo un id */
    if (isset($_GET['id'])) {
        
        $id = $_GET['id'];
        $queryDelete = "DELETE FROM task WHERE id = $id";

        $result = mysqli_query($conexion, $queryDelete);
        
        if (!$result) {
            die("error in delete");
        }
        echo'<script type="text/javascript">alert("Delete success!");window.location.href="../index.php";</script>'; 

    }

?>