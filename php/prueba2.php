<?php

include("connection.php");

$id_p = $_GET['id_p'];
$fecha = $_POST['Fecha'];
$hora1 = $_POST['primera_hora'];
$hora2 = $_POST['segunda_hora'];
$hora3 = $_POST['tercera_hora'];
$hora4 = $_POST['cuarta_hora'];

echo $id_p;
echo $fecha;
echo $hora1;
echo $hora2;
echo $hora3;
echo $hora4;


$sql = "SELECT * FROM horario WHERE id_profesor='$id_p' AND fecha='$fecha'";
$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    $rows = mysqli_num_rows($resultado);

    if ($rows == 0) {

        $sql1 = "INSERT INTO horario (id_profesor,fecha,hora1,hora2,hora3,hora4) 
        VALUES ('$id_p','$fecha','$hora1','$hora2','$hora3','$hora4')";
        mysqli_query($connection, $sql1);

        
        header("Location: ../screens/Calendario_docente.php?id_p=$id_p"); 

    } else {

        $sql2="UPDATE horario SET id_profesor='$id_p',fecha='$fecha',hora1='$hora1',
        hora2='$hora2',hora3='$hora3',hora4='$hora4' WHERE id_profesor='$id_p' AND fecha='$fecha'";
        mysqli_query($connection, $sql2);


       
        header("Location: ../screens/Calendario_docente.php?id_p=$id_p"); 

    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}


?>