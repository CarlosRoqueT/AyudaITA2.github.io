<?php
include("../php/connection.php");

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Shared Hosting Plans">
  <meta name="description" content="">
  <title>Citas Alumno</title>
  <link rel="stylesheet" href="../css/Pagina-seleccion-de-horario2.css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script src="../js/filtro.js"></script>
  <link rel="stylesheet" href="../css/Pagina-seleccion-de-horario.css" media="screen">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">



  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Pagina seleccion de horario">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-xl-mode" data-lang="es">
  <header class="u-clearfix u-header u-header" id="sec-c572">
    <div class="u-clearfix u-sheet u-valign-top-md u-valign-top-sm u-sheet-1">
      <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" src="../images/logo_tecnm.png" alt=""
        data-image-width="285" data-image-height="141">
      <img class="u-image u-image-contain u-image-round u-radius-10 u-image-2" src="../images/logo_ITA.png" alt=""
        data-image-width="2034" data-image-height="738">
    </div>
  </header>
  <section class="u-align-center u-clearfix u-gradient u-section-1" id="sec-3298">

    <div class="u-align-left u-clearfix u-sheet u-valign-top-sm u-sheet-1">

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

      <h3 class="u-text u-text-default u-text-1">Citas Solicitadas</h3>


      <tbody class="u-table-body">

        <div class="u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">

            <?php
            $ida = $_GET['id_a'];

            $con = "SELECT * FROM `cita2` WHERE id_alumno= '$ida'";
            $result = mysqli_query($connection, $con);

            while ($most = mysqli_fetch_array($result)) {
              $num_c = $most['id_alumno'];
              $num_m = $most['id_materia'];

              $conAL = "SELECT nombre,apellidos,capacidad_diferente_f,capacidad_diferente_m from estudiante Where num_contr='$num_c'";
              $resultAL = mysqli_query($connection, $conAL);
              $mostAL = mysqli_fetch_array($resultAL);
              $nom = $mostAL['nombre'];
              $ape = $mostAL['apellidos'];

              $conMAT = "SELECT nombre_materia from  materia_tics WHERE id_materia='$num_m' ";
              $resultMAT = mysqli_query($connection, $conMAT);
              $mostMAT = mysqli_fetch_array($resultMAT);
              $nomM = $mostMAT['nombre_materia'];
              ?>

              <tr>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-1">

                    <h5 style="text-decoration: underline;" class="u-text u-text-default u-text-4">
                      <?php echo $mostMAT['nombre_materia']; ?>
                    </h5>
                    <h5 class="u-text u-text-default">&lt;
                      <b>
                        <?php echo $most['dia']; ?>&gt;
                      </b>
                    </h5>
                    <h5 class="u-text u-text-default u-text-4">&lt;
                      <b>
                        <?php echo $most['hora']; ?>&gt;
                      </b>
                    </h5>

                    <h5 class="u-text u-text-default u-text-4 ">
                      <b>Tipo de Asesoria:</b>
                      <?php echo $most['tipo']; ?>
                    </h5>

                    <h5 class="u-text u-text-default u-text-4 ">
                      <b>Clase de Asesoria:</b>
                      <?php echo $most['clase']; ?>
                    </h5>


                    <h5 class="u-text u-text-default u-text-4 ">
                      <b>Cantidad de alumnos:</b>
                      <?php echo $most['cantidad']; ?>&nbsp;
                    </h5>

                    <h5 class="u-text u-text-default u-text-4 ">
                      <b>Capacidades diferentes (alumnos extra):</b>
                      <br>
                      <?php echo htmlentities($most['capacidades_diferentes']); ?>&nbsp;
                    </h5>


                    <h5 class="u-text u-text-default u-text-4">
                      <b>Aula:</b>
                      <?php echo $most['aula']; ?> &nbsp;
                    </h5>

                    <h5 class="u-text u-text-default u-text-4">
                      <b>Link de Teams:</b>
                    </h5>
                    <a href="<?php echo $most['link_teams']; ?>" 
                    style="display: inline-block; max-width: 100%; overflow: hidden; text-overflow: ellipsis;">
                    <?php echo $most['link_teams']; ?></a>

                    <h5 class="u-text u-text-default u-text-4">
                      <b>Tema:</b>
                      <?php echo htmlentities($most['tema']); ?> &nbsp;
                    </h5>

                    <h5 class="u-text u-text-default u-text-4">
                      <b>Capacidad diferente fisica:</b>
                      <?php echo $mostAL['capacidad_diferente_f']; ?>
                    </h5>

                    <h5 class="u-text u-text-default u-text-4">
                      <b>Capacidad diferente mental:</b>
                      <?php echo $mostAL['capacidad_diferente_m']; ?>
                    </h5>

                    <div style="word-wrap: break-word;">
                      <p style="font-weight: bold;" class="u-text u-text-default u-text-4">
                        <?php echo $mostAL['nombre'];
                        echo "&nbsp";
                        echo $mostAL['apellidos']; ?> :
                      </p>
                      <?php echo htmlentities($most['duda']); ?>&nbsp;

                    </div>&nbsp;

                  </div>
                </div>
              </tr>

              <?php
            }
            ?>




          </div>
        </div>
      </tbody>

    </div>
  </section>


  <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-3b24">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1"> © Copyright 2022, Todos los Derechos Reservados</p>
    </div>
  </footer>

</body>

</html>