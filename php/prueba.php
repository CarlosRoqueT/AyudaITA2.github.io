<?php

include("connection.php");

$id_p = $_GET['id_p'];
$id_a = $_GET['id_a'];
$id_m = $_GET['id_m'];
$fecha = $_GET['Fecha'];
$duda = $_GET["duda"];
$tema = $_GET["tema"];
$tipo = $_GET["tipo"];
$hora = $_POST['hora'];
$cantidad = $_POST["alumnos"];
$capacidad_ex = $_POST["capacidad_ex"];

$sql = "SELECT * FROM cita2 WHERE id_alumno='$id_a' AND id_materia='$id_m' AND dia='$fecha' AND hora='$hora'";
$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    $rows = mysqli_num_rows($resultado);

    if ($rows == 0) {

        $sql1 = "INSERT INTO cita2 (id_profesor, id_alumno, id_materia, dia, duda, tema, hora, cantidad,capacidades_diferentes,tipo) 
        VALUES ('$id_p','$id_a','$id_m ','$fecha','$duda','$tema','$hora','$cantidad','$capacidad_ex','$tipo')";
        mysqli_query($connection, $sql1);


        header("Location: ../screens/Citas_alumno.php?id_a=$id_a"); 

    } else {

        header("Location: ../screens/Citas_alumno.php?id_a=$id_a"); 


    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


?>