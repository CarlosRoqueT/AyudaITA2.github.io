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
  <title>Buscador_materia</title>
  <link rel="stylesheet" href="../css/inicio_sesion_III.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="../js/filtro.js"></script>

  <meta name="referrer" content="origin">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Buscador_materia">
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

  
  <section class="u-clearfix u-gradient u-section-1" id="sec-b88c">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-form-1">
        <form action=""
          class="u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" style="padding: 15px" source="email">
          <div class="u-form-group u-form-name u-label-top">
            <label for="name-558c" class="u-label"></label>
            <input type="text" placeholder="Buscar" id="name-558c" name="name"
              class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
          </div>
          
          <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
          <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try
            again.</div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="ca1532ffb1c53c30d3b2b88eb3bfa317">
        </form>
      </div>

      <div class="u-expanded-width u-table u-table-responsive u-table-1" style="text-align: right">
              <div class="row">
                <div class="col-md-4">
                <?php $id_a = $_GET['id_a'];?>
                <a href="Buscador_materia.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    < Regresar 
                  </a>
               </div>
              </div>
            </div>
            <h2 class="u-text u-text-default u-text-1">Deportiva</h2>
      <div class=" u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="25.5%">
            <col width="25.5%">
            <col width="25.5%">
            <col width="25.5%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 59px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Actividad</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Hora</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Dias</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Salon asignado</th>
            </tr>
          </thead>
          <tbody class="u-table-body">
              
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Ajedrez</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">13:00-15:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a jueves</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">0955</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Atletismo</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">12:00-14:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a jueves</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Pista de carreras</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Beisbol</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">15:00:17:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Martes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Cancha de beisbol</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Natación</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">12:00-14:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Alberca</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Grupo de animación</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">13:00-15:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Martes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Auditorio</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Softbol</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">13:00-15:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Martes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Pista de carreras</td>
              </tr>
    
          </tbody>
        </table>
      </div>
      <h2 class="u-text u-text-default u-text-1">Cultural</h2>
      <div class=" u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="25.5%">
            <col width="25.5%">
            <col width="25.5%">
            <col width="25.5%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 59px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Actividad</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Hora</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Dias</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Salon asignado</th>
            </tr>
          </thead>
          <tbody class="u-table-body">
              
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Baile de salón</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">14:00-16:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a jueves</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Auditorio planta alta A</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Baile moderno</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">13:00-15:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a jueves</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Auditorio planta alta B</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Teatro</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">12:00-14:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a jueves</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Auditorio</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Taller de Lectura</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">15:00:17:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">0528</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Danza Árabe</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">13:00-15:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Martes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Auditorio planta alta c</td>
              </tr>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Banda de Guerra</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">12:00-14:00</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Lunes a viernes</td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Patio de practicas</td>
              </tr>
    
          </tbody>
        </table>
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