<?php

include("connection.php");

$id_p = $_GET['id_p'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$nombre_completo= $_GET['nombre_completo'];
//print_r($_FILES['imagen']);
if($_FILES['imagen']['size']==0){

    $sql = "INSERT INTO eventos (titulo,descripcion,id_docente,autor) VALUES 
                ('$titulo','$descripcion','$id_p','$nombre_completo')";
    
            if (mysqli_query($connection, $sql)) {
    
                header("Location: ../screens/Eventos_d_edit.php?id_p=$id_p"); 
                exit();
    
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }
    
            mysqli_close($connection);


}else{

    if ($_FILES['imagen']) {
        $nombre_base = basename($_FILES['imagen']['name']);
        $nombre_final = date("m-d-y") . "-" . date("H-i-s") . "-" . $nombre_base;
        $ruta = "../archivos/" . $nombre_final;
        $subirarchivo = move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
    
        if ($subirarchivo) {
    
            $sql = "INSERT INTO eventos (titulo,imagen,descripcion,id_docente,autor) VALUES 
                ('$titulo','$ruta','$descripcion','$id_p','$nombre_completo')";
    
            if (mysqli_query($connection, $sql)) {
    
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

}



?>