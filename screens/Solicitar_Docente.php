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
        <?php echo $_GET['nombrem']; ?>
      </h2>
      <br>
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="25%">
            <col width="25%">
            <col width="25%">
            <col width="25%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 32px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Foto</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-2">Docente</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-3">Correo</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-4">Solicitar</th>
            </tr>
          </thead>

          <tbody class="u-table-body">

            <?php
            $idm = $_GET['id_m'];
            $id_a = $_GET['id_a'];

            $con = "SELECT * from profesor INNER JOIN materia_profesor INNER JOIN materia_tics 
                    WHERE id_profesor=num_contrP AND materia_tics.id_materia=materia_profesor.id_materia AND materia_tics.id_materia='$idm';";
            //$idm
            $result = mysqli_query($connection, $con);
            while ($most = mysqli_fetch_array($result)) {
              ?>

              <tr style="height: 74px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                 <center><img src="<?php echo $most['foto_p']; ?>" alt="" width="100" height="100"> </center>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['nombreP'];
                  echo "<br>";
                  echo $most['apellidoP']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['correoP']; ?>
                </td>
                <td class="u-border-2 u-border-grey-30 u-palette-4-light-2 u-table-cell u-table-cell-6">
                  <a method="POST"
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                    href="Calendario_alumnos.php?materia=<?php echo $_GET['nombrem']; ?>&nombrep=<?php echo $most['nombreP']; ?>
                              &apellidop=<?php echo $most['apellidoP']; ?>&correop=<?php echo $most['correoP']; ?>&id_pr=<?php echo $most['num_contrP']; ?>
                              &id_a=<?php echo $id_a; ?>&id_m=<?php echo $idm; ?>">Solicitar</a>

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