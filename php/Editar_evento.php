<?php

include("connection.php");

$id_p = $_GET['id_p'];
$id = $_GET['id'];
$imagen_old = $_GET['imagen_old'];
$titulo = $_POST["titulo"];
$descripcion = $_POST["descripcion"];


$sql = "SELECT * FROM eventos WHERE ID='$id' AND id_docente='$id_p'";
$resultado = mysqli_query($connection, $sql);


if ($_FILES['imagen']['size'] == 0) {

    $sql1 = "UPDATE eventos SET titulo='$titulo',imagen='$imagen_old',descripcion='$descripcion' 
             WHERE ID='$id' AND id_docente='$id_p'";
    mysqli_query($connection, $sql1);

    header("Location: ../screens/Eventos_d_edit.php?id_p=$id_p");
    mysqli_close($connection);
    exit();

} else {
    $nombre_base = basename($_FILES['imagen']['name']);
    $nombre_final = date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
    $ruta = "../archivos/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);

    if ($subirarchivo) {
    
        $sql1 = "UPDATE eventos SET titulo='$titulo',imagen='$ruta',descripcion='$descripcion' 
            WHERE ID='$id' AND id_docente='$id_p'";

        if (mysqli_query($connection, $sql1)) {

            header("Location: ../screens/Eventos_d_edit.php?id_p=$id_p"); 
            exit();

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }

        mysqli_close($connection);

    }else{
        echo "error";
    }

}

?>