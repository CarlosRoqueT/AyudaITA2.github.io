<?php

include("connection.php");

$id_p =$_GET['id_p'];
$id_a = $_GET['id_a'];
$id_m = $_GET['id_m'];
$dia = $_GET['dia'];
$hora = $_GET['hora'];

$sql = "SELECT * FROM hora WHERE id_alumno='$id_a' AND id_materia='$id_m' AND dia='$dia' AND hora='$hora'";
$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    $rows = mysqli_num_rows($resultado);
  
    if ($rows == 1) {

        $sql1 = "DELETE FROM cita2 WHERE id_alumno='$id_a' AND id_materia='$id_m' AND dia='$dia' AND hora='$hora'";
        mysqli_query($connection, $sql1);

        header("Location: ../screens/Pagina-seleccion-de-horario.php?id_p=$id_p"); 
    
        exit();
    } else {
        

        header("Location: ../screens/Pagina-seleccion-de-horario.php?id_p=$id_p"); 
        
        

        exit();
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>