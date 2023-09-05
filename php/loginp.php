<?php
  include ("connection.php");

  $num_con =htmlentities($_POST["num_contr"]);
  $pass =htmlentities($_POST["contraseña"]);

  // Consulta segura para evitar inyecciones SQL.
  $sql = sprintf("SELECT num_contrp,contraseñap FROM profesor WHERE num_contrp='$num_con' AND contraseñap = '$pass'");
  $resultado = $connection->query($sql);
  $count = mysqli_num_rows($resultado);

  // Verificando si el usuario existe en la base de datos.
  if($count == 1){
    // Guardo en la sesión el email del usuario.
    $_SESSION['num_contr'] = $num_con;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: ../screens/Calendario_docente.php?id_p=$num_con"); 
  }else{
    
    echo'<script type="text/javascript">
    alert("Credenciales no validas");
    window.location.href="../screens/inicio_sesión_docente.php";
    </script>';
  }
  mysqli_close($connection);
?>
