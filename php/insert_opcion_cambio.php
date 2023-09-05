<?php

include ("connection.php");

$hora=$_GET['hora'];
$id_p= $_GET['id_p'];
$dia= $_GET['dia'];
$valor=$_POST["radiobutton"];



$sql="UPDATE horario SET $hora ='$valor' WHERE id_profesor='$id_p' AND dia='$dia'";

if(mysqli_query($connection, $sql)){

    header("Location: ../screens/Horario_Materia_Docente.php?id_p=$id_p");
    exit();
   
 }
 else{
     echo "Error: ". $sql . "<br>" . mysqli_error($connection);
 }

 mysqli_close($connection);
?>