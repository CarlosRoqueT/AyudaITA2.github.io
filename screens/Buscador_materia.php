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
                <a href="Citas_alumno.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    Ver Cita
                  </a>
                <a href="Eventos.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    Eventos
                  </a>
                  <a href="Info.general.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    Informacion General
                  </a>
                <a href="Actividades_complementarias.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    Info. Actividades Complementarias 
                  </a>
                <!-- <a href="Tutoria_alumno.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    Tutor
                  </a>
                -->
                
               </div>
              </div>
            </div>

            


      <div class=" u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="33.3%">
            <col width="33.3%">
            <col width="33.3%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 59px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Materia</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Informacion</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Asesoria</th>
            </tr>
          </thead>
          <tbody class="u-table-body">

            <?php
            $con = "SELECT * from materia_tics";
            $id_a = $_GET['id_a'];
            
            $result = mysqli_query($connection, $con);
            while ($most = mysqli_fetch_array($result)) {
              ?>
              
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4"><?php echo $most['nombre_materia']; ?></td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4"><a href="<?php echo $most['ficha']; ?>" download="<?php echo $most['nombre_materia']; ?>"> Programa de la materia </a></td>
                <td class="u-border-2 u-border-grey-30 u-palette-4-light-2 u-table-cell u-table-cell-6">
                <a method="POST"  class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                    href="Solicitar_Docente.php?nombrem=<?php echo $most['nombre_materia']; ?>&id_m=<?php echo $most['id_materia']; ?>&id_a=<?php echo $id_a; ?>">Solicitar</a>
                </td>
              </tr>
            <?php
            }
            ?>


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