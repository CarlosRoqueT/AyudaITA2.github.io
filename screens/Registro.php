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
  <title>Registro</title>
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
      <h1 class="u-text u-text-default u-text-white u-text-1">Regi​stro </h1>
      <div class="u-form u-form-1">

        <form action="../php/insert_alum.php" method="POST"
          class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form"
          style="padding: 10px;">
          <div class="u-form-group u-form-name">
            <label for="name-b640" class="u-label u-text-body-alt-color">Nombre</label>
            <input type="text" placeholder="Ingrese su Nombre(s)" id="name-b640" name="nombre"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" 
              onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" required="">
          </div>

          <div class="u-form-email u-form-group">
            <label for="email-b640" class="u-label u-text-body-alt-color">Apellido</label>
            <input type="text" placeholder="Ingrese sus apellidos" id="email-b640" name="apellidos"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" 
              onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" required="">
          </div>


          <div class="u-form-group u-form-group-3">
            <label for="text-dc7d" class="u-label u-text-body-alt-color">Correo</label>
            <input type="email" placeholder="Ingrese su correo" id="text-dc7d" name="correo"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-group u-form-group-3">
            <label for="text-dc7d" class="u-label u-text-body-alt-color">Telefono</label>
            <input type="number" placeholder="Ingrese su telefono" id="text-dc7d" name="telefono"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>
          <div class="u-form-email u-form-group">
            <label for="email-b640" class="u-label u-text-body-alt-color">Contraseña</label>
            <input type="password" placeholder="Ingrese una contraseña" id="pass-b" name="contraseña"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
          </div>

          <div class="u-form-group u-form-group-3">
            <label for="text-dc7d" class="u-label u-text-body-alt-color">Numero de Control</label>
            <input type="text" placeholder="Ingrese su numero de control" id="text-dc7d" name="num_contr"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" 
              onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))"required="">
          </div>

          <div class="u-form-group u-form-group-3">
            <label for="text-dc7d" class="u-label u-text-body-alt-color">Semestre</label>
            <select id="select-ce47" name="semestre"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>

          <div class="u-form-group u-form-group-3">
            <label for="text-dc7d" class="u-label u-text-body-alt-color">Capacidad Diferente (Fisica)</label>
            <select id="capacidad" name="capacidad(f)"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
              <option value="Ninguna">Ninguna</option>
              <option value="Auditiva">Auditiva</option>
              <option value="Comunicasion (Lenguaje)">Comunicasion (Lenguaje)</option>
              <option value="Visual (Ceguera Moderada o Grave)">Visual (Ceguera Moderada o Grave)</option>
              <option value="Fisica (Prótesisi)">Fisica (Prótesisi)</option>
              <option value="Fisica (Silla de Ruedas)">Fisica (Silla de Ruedas)</option>
              <option value="Fisica (Baston)">Fisica (Baston)</option>
              <option value="Intelectual (Limitada)">Intelectual (Limitada)</option>
              <option value="Intelectual (Superdotacion)">Intelectual (Superdotacion)</option>
              <option value="Multiples">Multiples</option>
            </select>
          </div>

          <div class="u-form-group u-form-group-3">
            <label for="text-dc7d" class="u-label u-text-body-alt-color">Capacidad Diferente (Mental)</label>
            <select id="capacidad" name="capacidad(m)"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
              <option value="Ninguna">Ninguna</option>
              <option value="TDA (Trastorno por Déficit de Atención)">TDA (Trastorno por Déficit de Atención)</option>
              <option value="TDAH (Trastorno por Déficit de Atención/Hiperactividad)">TDAH (Trastorno por Déficit de Atención/Hiperactividad)</option>
              <option value="TC (Trastorno de Conducta)">TC (Trastorno de Conducta)</option>
              <option value="Ansiedad Excesiva">Ansiedad Excesiva</option>
              <option value="Depresion">Deprecion</option>
              <option value="Tourette">Síndrome Tourette (Tics)</option>
              <option value="TOC (Trastorno Obsesivo Compulsivo)">TOC (Trastorno Obsesivo Compulsivo)</option>
              <option value="TEP (Trastorno Esquizotípico de la Personalidad)">TEP (Trastorno Esquizotípico de la Personalidad)</option>
              
            </select>
          </div>

          <div class="u-form-group u-form-select u-form-group-4">
            <label for="select-ce47" class="u-label u-text-body-alt-color">Carreras</label>
            <div class="u-form-select-wrapper">
              <select id="select-ce47" name="carrera"
                class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                <option value="Ingeniería Química">Ingeniería Química</option>
                <option value="Ingeniería Mecánica">Ingeniería Mecánica</option>
                <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                <option value="Ingeniería Electrónica">Ingeniería Electrónica</option>
                <option value="Ingeniería en Gestión Empresarial">Ingeniería en Gestión Empresarial</option>
                <option value="Licenciatura en Administración">Licenciatura en Administración</option>
                <option value="Ingeniería en Tecnologías de la Información y Comunicaciones">Ingeniería en Tecnologías
                  de la Información y Comunicaciones</option>
                <option value="Ingeniería en Materiales">Ingeniería en Materiales</option>
              </select>
              <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
              </svg>
            </div>
          </div>
          <div class="u-align-center u-form-group u-form-submit">
            <button href=""
              class="u-border-none u-btn u-btn-submit u-button-style u-palette-4-light-1 u-text-body-alt-color u-btn-1">Enviar</button>
            <input type="text" value="submit" class="u-form-control-hidden">
          </div>
          <div class="u-form-send-message u-form-send-success"> Gracias! Tu mensaje ha sido enviado. </div>
          <div class="u-form-send-error u-form-send-message"> No se puede enviar su mensaje. Por favor, corrija los
            errores y vuelva a intentarlo. </div>
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