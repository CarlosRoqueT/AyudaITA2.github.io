<?php
include("../php/connection.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Cambiar_Opcion</title>
  <link rel="stylesheet" href="../css/inicio_sesion_III.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">
  <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Cambiar_Opcion">
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
  <section class="u-clearfix u-gradient u-section-1" id="sec-b68e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-white u-form-1">
        <?php

        $hora = $_GET['hora'];
        $id_p = $_GET['id_p'];
        $dia = $_GET['dia'];

        ?>
        <form
          action="../php/insert_opcion_cambio.php?hora=<?php echo $hora; ?>&id_p=<?php echo $id_p; ?>&dia=<?php echo $dia; ?>"
          method="POST" class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px"
          source="email">
          <div class="u-form-group u-form-input-layout-vertical u-form-radiobutton u-label-top u-form-group-1">
            <label class="u-label u-label-1">Escoja una Opcion
              
            </label>
            <div class="u-form-radio-button-wrapper">

              <div class="u-input-row">
                <input type="radio" name="radiobutton" value="Ocupado" required>
                <label class="u-label u-label-2" for="radiobutton"  >Ocupado </label>
              </div>
              <div class="u-input-row">
                <input type="radio" name="radiobutton" value="Libre" required>
                <label class="u-label u-label-3" for="radiobutton">Libre</label>
              </div>
            </div>
          </div>
          <div class="u-form-group u-form-submit u-label-top">
            <button href="" class="u-btn u-btn-submit u-button-style">Editar</button>
            <input type="submit" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
          <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try
            again.</div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="ca1532ffb1c53c30d3b2b88eb3bfa317">
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