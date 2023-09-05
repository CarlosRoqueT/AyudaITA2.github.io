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
  <title>Citas Docente</title>
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
      <h3 class="u-text u-text-default u-text-1">Citas Solicitadas</h3>
      <?php
      $idm = $_GET['id_p'];
      ?>
      
      <div class="u-expanded-width u-table u-table-responsive u-table-1" style="text-align: right">
      <a href="../php/crearReporte.php?id_p=<?php echo $idm; ?>"
        class="u-border-none u-btn u-button-style u-gradient u-none u-text-body-alt-color u-btn-1">Crear
        Reporte</a>
        </div>

        <div class="u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
          <tbody class="u-table-body">
            <?php

            $con = "SELECT * FROM `cita2` WHERE id_profesor= '$idm'";
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
                    <form action="../php/eliminar.php?id_a=<?php echo $num_c; ?>
                              &id_m=<?php echo $num_m; ?>&id_p=<?php echo $idm; ?>
                              &dia=<?php echo $most['dia']; ?>
                              &hora=<?php echo $most['hora']; ?>" method="POST">
                      <button href=""
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-1-base u-radius-2 u-btn-3">Eliminar&nbsp;<span
                          class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px"
                            style="width: 1em; height: 1em;">
                            <path
                              d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                            </path>
                          </svg><img></span>
                      </button>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </form>


                    <h5 class="u-text u-text-default u-text-2">&lt;
                      <?php echo $most['dia']; ?>&gt;
                    </h5>
                    <h5 class="u-text u-text-default u-text-4">&lt;
                      <b>
                        <?php echo $most['hora']; ?>&gt;
                      </b>
                    </h5>
                    <h5 style="text-decoration: underline;" class="u-text u-text-default u-text-4">
                      <?php echo $mostMAT['nombre_materia']; ?>
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
                      <?php echo $most['cantidad']; ?>
                    </h5>

                    <h5 class="u-text u-text-default u-text-4 ">
                      <b>Capacidades diferentes (alumnos extra):</b>
                      <br>
                      <?php echo $most['capacidades_diferentes']; ?>
                    </h5>
                    


                    <h5 class="u-text u-text-default u-text-4">
                      <b>Aula:</b>
                      <?php echo $most['aula']; ?>
                    </h5>

                    <h5 class="u-text u-text-default u-text-4">
                      <b>Link de Teams:</b>
                    </h5>
                    <a href="<?php echo $most['link_teams']; ?>"
                    style="display: inline-block; max-width: 100%; overflow: hidden; text-overflow: ellipsis;"
                    ><?php echo $most['link_teams']; ?></a>

                    <h5 class="u-text u-text-default u-text-4">
                      <b>Tema:</b>
                      <?php echo $most['tema']; ?>
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
                      <?php echo $most['duda']; ?>&nbsp;

                    </div>&nbsp;


                    <form action="../php/Editar_Aula.php?id_a=<?php echo $num_c; ?>
                              &id_m=<?php echo $num_m; ?>&id_p=<?php echo $idm; ?>
                              &dia=<?php echo $most['dia']; ?>
                              &hora=<?php echo $most['hora']; ?>" method="POST">

                      <div class="u-form-group u-form-message u-label-top u-form-group-1">
                        <label style="font-weight: bold;" for="message-6797" class="u-label">¿En que Aula sera la
                          cita?</label>

                        <textarea placeholder="Escribe aqui el Aula correspondiente" rows="1" cols="1" id="message-6797"
                          name="aula" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1"
                          required="" style="resize: none;"></textarea>
                      </div>

                      <button href=""
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-1-base u-radius-2 u-btn-3">Editar
                        Aula&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512"
                            x="0px" y="0px" style="width: 1em; height: 1em;">
                            <path
                              d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                            </path>
                          </svg><img></span>
                      </button>


                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </form>

                    <form action="../php/Editar_Teams.php?id_a=<?php echo $num_c; ?>
                              &id_m=<?php echo $num_m; ?>&id_p=<?php echo $idm; ?>
                              &dia=<?php echo $most['dia']; ?>
                              &hora=<?php echo $most['hora']; ?>" method="POST">

                      <div class="u-form-group u-form-message u-label-top u-form-group-1">
                        <label style="font-weight: bold;" for="message-6797" class="u-label">Agregar link de Teams</label>

                        <textarea placeholder="Escribe aqui el link de Teams" rows="1" cols="1" id="teams_link"
                          name="teams_link" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1"
                          required="" style="resize: none;"></textarea>
                      </div>

                      <button href=""
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-1-base u-radius-2 u-btn-3">Editar
                        Links&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512"
                            x="0px" y="0px" style="width: 1em; height: 1em;">
                            <path
                              d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                            </path>
                          </svg><img></span>
                      </button>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </form>

                    <form action="../php/Editar_Tipo_As.php?id_a=<?php echo $num_c; ?>
                              &id_m=<?php echo $num_m; ?>&id_p=<?php echo $idm; ?>
                              &dia=<?php echo $most['dia']; ?>
                              &hora=<?php echo $most['hora']; ?>" method="POST">

                      <div class="u-form-group u-form-message u-label-top u-form-group-1">
                        <label style="font-weight: bold;" for="message-6797" class="u-label">Agregar Clase de
                          Asesoria</label>

                        <select id="clase" name="clase"
                          class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                          <option value="Presencial">Presencial</option>
                          <option value="En Linea">En Linea</option>
                        </select>
                      </div>

                      <button href=""
                        class="u-btn u-btn-round u-button-style u-hover-palette-1-light-2 u-palette-1-base u-radius-2 u-btn-3">Editar
                        Clase&nbsp;<span class="u-icon u-text-white"><svg class="u-svg-content" viewBox="0 0 512 512"
                            x="0px" y="0px" style="width: 1em; height: 1em;">
                            <path
                              d="M506.134,241.843c-0.006-0.006-0.011-0.013-0.018-0.019l-104.504-104c-7.829-7.791-20.492-7.762-28.285,0.068 c-7.792,7.829-7.762,20.492,0.067,28.284L443.558,236H20c-11.046,0-20,8.954-20,20c0,11.046,8.954,20,20,20h423.557 l-70.162,69.824c-7.829,7.792-7.859,20.455-0.067,28.284c7.793,7.831,20.457,7.858,28.285,0.068l104.504-104 c0.006-.006,0.011-.013,0.018-.019C513.968,262.339,513.943,249.635,506.134,241.843z">
                            </path>
                          </svg><img></span>
                      </button>
                      <input type="submit" value="submit" class="u-form-control-hidden">
                    </form>


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