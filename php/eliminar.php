<?php

include("connection.php");

$id_p =$_GET['id_p'];
$id_a = $_GET['id_a'];
$id_m = $_GET['id_m'];
$dia = $_GET['dia'];
$hora = $_GET['hora'];

$consulta = "SELECT * FROM estudiante WHERE num_contr='$id_a'";
$result= mysqli_query($connection, $consulta);
$most = mysqli_fetch_array($result);


$destinatario = $most['correo'];
$asunto = "Cancelacion de CITA";
$cuerpo = "Por fuerzas mayores el docente tuvo que cancelar la cita,
           disculpe la molestia, se le suguiere crear otra cita en otro dia, 
           muchas gracias por su comprencion";
$aut = "From: cortis.2499@gmail.com";


$sql = "SELECT * FROM cita2 WHERE id_alumno='$id_a' AND id_materia='$id_m' AND dia='$dia' AND hora='$hora'";
$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    $rows = mysqli_num_rows($resultado);
  
    if ($rows == 1) {

      //  if (mail($destinatario, $asunto, $cuerpo,$aut)) {
        //    echo 'El mensaje se ha enviado correctamente.';
         //} else {
          //  echo 'Hubo un problema al enviar el mensaje.';
        // }

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