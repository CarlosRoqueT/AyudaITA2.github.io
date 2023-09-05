<?php
include ("../php/connection.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Inicio de sesión Docente">
    <meta name="description" content="">
    <title>inicio_sesión_docente</title>
    <link rel="stylesheet" href="../css/inicio_sesion_II.css" media="screen">
<link rel="stylesheet" href="../css/inicio_sesión_docente.css" media="screen">
    <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="inicio_sesión_docente">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="es"><header class="u-clearfix u-header u-header" id="sec-cdb1"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" src="../images/logo_tecnm.png" alt="" data-image-width="285" data-image-height="141">
        <img class="u-image u-image-contain u-image-round u-radius-10 u-image-2" src="../images/logo_ITA.png" alt="" data-image-width="2034" data-image-height="738">
      </div></header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-db34">
      <div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-image u-image-circle u-image-contain u-preserve-proportions u-image-1" src="../images/ini_usuario.png" alt="" data-image-width="128" data-image-height="128">
        <h2 class="u-text u-text-default u-text-white u-text-1">Inicio de sesión Docente&nbsp;</h2>
        <div class="u-form u-form-1">

        <form action="../php/loginp.php" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="email" name="form">
            <div class="u-form-group u-form-name u-label-top">
              <label for="name-6797" class="u-label u-text-body-alt-color">Numero de control</label>
              <input type="text" placeholder="Ingrese su numero de control" id="name-6797" name="num_contr" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-top">
              <label for="email-6797" class="u-label u-text-body-alt-color">Contraseña</label>
              <input type="password" placeholder="Ingrese su contraseña" id="email-6797" name="contraseña" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2" required="">
            </div>
            <div class="u-align-center u-form-group u-form-submit u-label-top">
              <button href="Horario_Materia_Docente.php" class="u-border-none u-btn u-btn-submit u-button-style u-palette-4-light-1 u-text-body-alt-color u-btn-1">Iniciar sesión<br>
              </button>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="ca1532ffb1c53c30d3b2b88eb3bfa317">
          </form>

        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-2a74"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> © Copyright 2022, Todos los Derechos Reservados</p>
      </div></footer>
  
</body></html>