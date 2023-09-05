<?php
  include ("connection.php");

  $num_con =$connection-> real_escape_string(htmlentities($_POST["num_contr"]));
  $pass =$connection-> real_escape_string(htmlentities($_POST["contraseña"]));

  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT num_contr,contraseña FROM estudiante WHERE num_contr='$num_con' AND contraseña = '$pass'");
  $resultado = $connection->query($sql);
  $count = mysqli_num_rows($resultado);

  // Verificando si el usuario existe en la base de datos.
  if($count == 1){
    // Guardo en la sesión el email del usuario.
    $_SESSION['num_contr'] = $num_con;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: ../screens/Buscador_materia.php?id_a=$num_con"); 
  }else{
    
    echo'<script type="text/javascript">
    alert("Credenciales no validas");
    window.location.href="../screens/inicio_sesion_alumnos.php";
    </script>';
  }
  mysqli_close($connection);
?>
