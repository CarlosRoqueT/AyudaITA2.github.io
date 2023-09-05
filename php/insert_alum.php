<?php

include ("connection.php");

//varaibles
$num_con =$_POST["num_contr"];
$name =$_POST["nombre"];
$l_name =$_POST["apellidos"];
$email =$_POST["correo"];
$telefono =$_POST["telefono"];
$career =$_POST["carrera"];
$pass =$_POST["contraseña"];
$semestre =$_POST["semestre"];
$capacidad_f =$_POST["capacidad(f)"];
$capacidad_m =$_POST["capacidad(m)"];

$sql="INSERT INTO estudiante (num_contr,nombre,apellidos,correo,telefono,carrera,contraseña,semestre,capacidad_diferente_f,capacidad_diferente_m) VALUES 
         ('$num_con','$name','$l_name','$email','$telefono','$career','$pass','$semestre','$capacidad_f','$capacidad_m')";

if(mysqli_query($connection, $sql)){

    header("Location: ../screens/inicio_sesion_alumnos.php");
    exit();
   
 }
 else{
     echo "Error: ". $sql . "<br>" . mysqli_error($connection);
 }

 mysqli_close($connection);
?>