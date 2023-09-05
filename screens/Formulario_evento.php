<?php
include("../php/connection.php");
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Regi​stro​">
  <meta name="description" content="">
  <title>Evento</title>
  <link rel="stylesheet" href="../css/reg_bus.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Registro">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="es">
  <header class="u-clearfix u-header u-header" id="sec-cdb1">
    <div class="u-clearfix u-sheet u-sheet-1">
      <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" src="../images/logo_tecnm.png" alt=""
        data-image-width="285" data-image-height="141">
      <img class="u-image u-image-contain u-image-round u-radius-10 u-image-2" src="../images/logo_ITA.png" alt=""
        data-image-width="2034" data-image-height="738">
    </div>
  </header>
  <section class="u-clearfix u-gradient u-section-1" id="sec-bb3b">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-text-white u-text-1">Crear Evento </h1>
      <div class="u-form u-form-1">

        <?php $id_p = $_GET['id_p']; 
        $con = "SELECT nombreP,apellidoP from profesor WHERE num_contrP='$id_p'";
        $result = mysqli_query($connection, $con);
        $most = mysqli_fetch_array($result);
        $nombre_completo=$most['nombreP'].' '.$most['apellidoP'];
        ?>

        <form action="../php/Crear_evento.php?id_p=<?php echo $id_p; ?>
        &nombre_completo=<?php echo $nombre_completo ?>" 
        method="POST" enctype="multipart/form-data">
        
        <label for="name-b640" class="u-label u-text-body-alt-color">Titulo</label>
        <input type="text" placeholder="Ingrese una titulo" id="text-dc7d" name="titulo"
        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
        
        <label class="u-label u-text-body-alt-color">Imagen</label>
        <input name="imagen" id="archivo" type="file"
        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >

        <label for="text-dc7d" class="u-label u-text-body-alt-color">Descripcion</label>
        <textarea name="descripcion" placeholder="Ingrese una descripcion" cols="4" rows="10"
        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
          

          <div class="u-align-center">
          <button type="submit"
            class="u-border-none u-btn u-btn-submit u-button-style u-palette-4-light-1 u-text-body-alt-color u-btn-1">
            Crear</button>
            </div>
        </form>

       
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-2a74">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1"> © Copyright 2022, Todos los Derechos Reservados</p>
    </div>
  </footer>

</body>

</html>