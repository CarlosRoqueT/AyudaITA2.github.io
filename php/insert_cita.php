<?php

include("connection.php");

$id_p = $_GET['id_p'];
$id_a = $_GET['id_a'];
$id_m = $_GET['id_m'];
$dia = $_GET['dia'];
$hora = $_GET['hora'];
$duda = $_POST["message"];
$cantidad =$_POST["cantidad"];

$sql = "SELECT * FROM cita WHERE id_alumno='$id_a' AND id_materia='$id_m' AND dia='$dia' AND hora='$hora'";
$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    $rows = mysqli_num_rows($resultado);
  
    if ($rows == 0) {

        $sql1 = "INSERT INTO cita (id_profesor, id_alumno, id_materia, dia, duda, hora, cantidad) 
        VALUES ('$id_p','$id_a','$id_m ','$dia','$duda','$hora','$cantidad')";
        mysqli_query($connection, $sql1);


        echo'<script type="text/javascript">
        alert("Cita creada con exito");
        window.location.href="../screens/inicio_sesion_alumnos.php";
        </script>';
    
        exit();
    } else {

        echo'<script type="text/javascript">
        alert("Cita ya existente, vuelva a intentar en otra hora o dia");
        window.location.href="../screens/inicio_sesion_alumnos.php";
        </script>';
        
        

        exit();
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>