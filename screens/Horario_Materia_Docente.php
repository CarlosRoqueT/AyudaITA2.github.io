<?php
include("../php/connection.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Nombre_Materia">
  <meta name="description" content="">
  <title>Horiario_Materia_Docente</title>
  <link rel="stylesheet" href="../css/inicio_sesion_III.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">

  <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Página 1">
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
  <section class="u-clearfix u-gradient u-section-1" id="sec-4d1f">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-default u-text-1">
        Bienvenido
      </h2>
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="16.6%">
            <col width="16.6%">
            <col width="16.6%">
            <col width="16.6%">
            <col width="16.6%">
            <col width="17%">
          </colgroup>
          <thead class="u-black u-table-header u-table-header-1">
            <tr style="height: 37px;">
              <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-1">Hora</th>
              <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-2">Lunes</th>
              <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-3">Martes</th>
              <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-4">Miercoles</th>
              <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-5">Jueves</th>
              <th class="u-border-1 u-border-black u-custom-color-1 u-table-cell u-table-cell-6">Viernes</th>
            </tr>
          </thead>
          <tbody class="u-table-body">

            <?php
            $idm = $_GET['id_p'];

            $conL = "SELECT * from horario WHERE id_profesor='$idm' AND dia='Lunes'";
            $resultL = mysqli_query($connection, $conL);
            $mostL = mysqli_fetch_array($resultL);

            $conMA = "SELECT * from horario WHERE id_profesor='$idm' AND dia='Martes'";
            $resultMA = mysqli_query($connection, $conMA);
            $mostMA = mysqli_fetch_array($resultMA);

            $conMI = "SELECT * from horario WHERE id_profesor='$idm' AND dia='Miercoles'";
            $resultMI = mysqli_query($connection, $conMI);
            $mostMI = mysqli_fetch_array($resultMI);

            $conJ = "SELECT * from horario WHERE id_profesor='$idm' AND dia='Jueves'";
            $resultJ = mysqli_query($connection, $conJ);
            $mostJ = mysqli_fetch_array($resultJ);

            $conV = "SELECT * from horario WHERE id_profesor='$idm' AND dia='Viernes'";

            $resultV = mysqli_query($connection, $conV);
            $mostV = mysqli_fetch_array($resultV);

            $H1 = "hora1";
            $H2 = "hora2";
            $H3 = "hora3";
            $H4 = "hora4";
            $H5 = "hora5";
            $H6 = "hora6";
            $H7 = "hora7";
            $H8 = "hora8";
            ?>

            <div class="u-expanded-width u-table u-table-responsive u-table-1" style="text-align: right">
              <div class="row">
                <div class="col-md-4">
                  <a href="Pagina-seleccion-de-horario.php?id_p=<?php echo $idm; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    Ver Citas Actuales
                  </a>
                </div>
              </div>
            </div>

            <tr style="height: 81px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-13">
                7:00 a 8:00
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H1; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora1']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H1; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora1']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H1; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora1']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H1; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora1']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H1; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora1']; ?></a>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-19"> 8:00 a 9:00
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H2; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora2']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H2; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora2']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H2; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora2']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H2; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora2']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H2; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora2']; ?></a>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-25"> 9:00 a 10:00
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H3; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora3']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H3; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora3']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H3; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora3']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H3; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora3']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H3; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora3']; ?></a>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-31"> 10:00 a
                11:00</td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H4; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora4']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H4; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora4']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H4; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora4']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H4; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora4']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H4; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora4']; ?></a>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-37">11:00 a 12:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H5; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora5']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H5; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora5']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H5; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora5']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H5; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora5']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H5; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora5']; ?></a>
              </td>


            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-43">12:00 a 13:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H6; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora6']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H6; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora6']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H6; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora6']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H6; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora6']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H6; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora6']; ?></a>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-49">13:00 a 14:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H7; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora7']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H7; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora7']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H7; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora7']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H7; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora7']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H7; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora7']; ?></a>
              </td>

            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-55">14:00 a 15:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H8; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostL['dia']; ?>">
                  <?php echo $mostL['hora8']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H8; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMA['dia']; ?>">
                  <?php echo $mostMA['hora8']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H8; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostMI['dia']; ?>">
                  <?php echo $mostMI['hora8']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H8; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostJ['dia']; ?>">
                  <?php echo $mostJ['hora8']; ?></a>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                  href="Cambiar_Opcion.php?hora=<?php echo $H8; ?>&id_p=<?php echo $idm; ?>&dia=<?php echo $mostV['dia']; ?>">
                  <?php echo $mostV['hora8']; ?></a>
              </td>

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