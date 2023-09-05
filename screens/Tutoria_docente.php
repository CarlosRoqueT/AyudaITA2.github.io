<?php
include("../php/connection.php");

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Ejemplo_Nombre_Materia">
  <meta name="description" content="">
  <title>Solicitar_Docente</title>
  <link rel="stylesheet" href="../css/du_escoj_soli.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Solicitar_Docente">
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

  
  <section class="u-clearfix u-gradient u-section-1" id="sec-c9f2">
    <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-expanded-width u-table u-table-responsive u-table-1" style="text-align: right">
              <div class="row">
                <div class="col-md-4">
                <?php $id_p = $_GET['id_p'];?>
                <a href="Calendario_docente.php?id_p=<?php echo $id_p; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    < Regresar 
                  </a>
               </div>
              </div>
            </div>
      <h2 class="u-text u-text-default u-text-1">
        Alumnos Tutorados
      </h2>
      <br>

      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
            <col width="12.5%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 59px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Num.Control</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-2">Nombre</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-3">Correo</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-4">Telefono</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-5">Semestre</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-6">Capacidad diferente (fisca)</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-7">Capacidad diferente (mental)</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-8">Revicion</th>
            </tr>
          </thead>

          <tbody class="u-table-body">

            <?php
            $id_p = $_GET['id_p'];
            $con = "SELECT * from estudiante WHERE tutor='$id_p';";
            //$idm
            $result2 = mysqli_query($connection, $con);
            while ($most2 = mysqli_fetch_array($result2)) {
              ?>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['num_contr']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['nombre'];
                  echo "<br>";
                  echo $most2['apellidos']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['correo']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['telefono']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['semestre']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['capacidad_diferente_f']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['capacidad_diferente_m']; ?>
                </td>

                <td class="u-border-2 u-border-grey-30 u-palette-4-light-2 u-table-cell u-table-cell-6">
                <a method="POST"  class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                    href="Estudiante_tutor.php?id_p=<?php echo $id_p ?>&id_a=<?php echo $most2['num_contr']; ?>
                    &nombre=<?php echo $most2['nombre']; ?>&apellidos=<?php echo $most2['apellidos']; ?>">Revicion</a>
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