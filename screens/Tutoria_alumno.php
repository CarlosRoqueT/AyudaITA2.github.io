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
                <?php $id_a = $_GET['id_a'];?>
                <a href="Buscador_materia.php?id_a=<?php echo $id_a; ?>" type="" class="u-btn u-btn-submit u-button-style">
                    < Regresar 
                  </a>
               </div>
              </div>
            </div>
      <h2 class="u-text u-text-default u-text-1">
        Tutor
      </h2>
      <br>
      <div class="u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="25%">
            <col width="25%">
            <col width="25%">
            <col width="25%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 59px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Foto</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-2">Docente</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-3">Correo</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-4">Cubiculo</th>
            </tr>
          </thead>

          <tbody class="u-table-body">

            <?php
            $id_a = $_GET['id_a'];
            $t= "SELECT tutor from estudiante WHERE num_contr='$id_a';";
            $result1 = mysqli_query($connection, $t);
            $most1 = mysqli_fetch_array($result1);
            $tu = $most1['tutor'];

            $con = "SELECT * from profesor INNER JOIN estudiante WHERE num_contrP='$tu'AND num_contr='$id_a';";
            //$idm
            $result2 = mysqli_query($connection, $con);
            while ($most2 = mysqli_fetch_array($result2)) {
              ?>
              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['foto_p']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['nombreP'];
                  echo "<br>";
                  echo $most2['apellidoP']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['correoP']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most2['cubiculo']; ?>
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