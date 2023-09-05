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
  <title>Duda</title>
  <link rel="stylesheet" href="../css/du_escoj_soli.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">
  <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Duda">
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
  <?php
  $id_a = $_GET['id_a'];
  $id_p = $_GET['id_p'];
  $id_m = $_GET['id_m'];
  $dia = $_GET['dia'];
  $hora = $_GET['hora'];
  echo $id_a;
  echo $id_p;
  echo $id_m;
  echo $dia;
  echo $hora;
  ?>
  <section class="u-clearfix u-gradient u-section-1" id="sec-63ba">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-form-1">



        <form
          action="../php/insert_cita.php?id_a=<?php echo $id_a; ?>&id_p=<?php echo $id_p; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $dia; ?>&hora=<?php echo $hora; ?>"
          method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;"
          source="email" name="form">
          <div class="u-form-group u-form-message u-label-top u-form-group-1">

            <label for="message-6797" class="u-label">¿Cuantos alumnos acudiran a la cita (incluyendote)?</label>
            <select id="select-ce47" name="cantidad"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6 o mas">6 o mas</option>
            </select>

            <label for="message-6797" class="u-label">¿Cual es tu duda?</label>
            <textarea placeholder="Escribe tu duda sobre la materia" rows="4" cols="10" id="message-6797" name="message"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1" required=""></textarea>
          </div>
          <div class="u-align-center u-form-group u-form-submit u-label-top u-form-group-2">
            <button href=""
              class="u-border-none u-btn u-btn-submit u-button-style u-palette-4-light-1 u-text-body-alt-color u-btn-1">Enviar</button>
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