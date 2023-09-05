<?php

include("connection.php");

$id_p =$_GET['id_p'];
$id= $_GET['id'];


$sql = "SELECT * FROM eventos WHERE id_docente='$id_p' AND ID='$id'";
$resultado = mysqli_query($connection, $sql);
if ($resultado) {
    $rows = mysqli_num_rows($resultado);
  
    if ($rows == 1) {

        $sql1 = "DELETE FROM eventos WHERE id_docente='$id_p' AND ID='$id'";
        mysqli_query($connection, $sql1);
        
        header("Location: ../screens/Eventos_d_edit.php?id_p=$id_p"); 
    
        exit();
    } else {
        

        header("Location: ../screens/Eventos_d_edit.php?id_p=$id_p"); 
        
        

        exit();
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>