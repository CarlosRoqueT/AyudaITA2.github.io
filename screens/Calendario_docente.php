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
  <link rel="stylesheet" href="../css/popup.css" media="screen">
  <link rel="stylesheet" href="../css/tabla_hora.css" media="screen">
  <script src="https://momentjs.com/downloads/moment.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js"></script>
  <meta name="generator" content="">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


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
      <br>


      <div class="u-expanded-width u-table u-table-responsive u-table-1" 
      style="overflow:scroll; height:200px; width:500px">
        <table class="u-table-entity" >
          <thead class="u-black u-table-header u-table-header-1" >
            <tr style="height: 40px;">

              <th class="u-border-1 u-border-black u-table-cell">Dias</th>
              <th class="u-border-1 u-border-black u-table-cell">Hora 1</th>
              <th class="u-border-1 u-border-black u-table-cell">Hora 2</th>
              <th class="u-border-1 u-border-black u-table-cell">Hora 3</th>
              <th class="u-border-1 u-border-black u-table-cell">Hora 4</th>
              
            </tr>
          </thead>
          <tbody class="u-table-body" >
           
              <?php
              $id_p = $_GET['id_p'];
              $con = "SELECT * from horario WHERE id_profesor =$id_p ORDER BY fecha DESC LIMIT 7";

              $result = mysqli_query($connection, $con);
              while ($most = mysqli_fetch_array($result)) {
                ?>

              <tr style="height: 25px;">
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['fecha']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['hora1']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['hora2']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['hora3']; ?>
                </td>
                <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">
                  <?php echo $most['hora4']; ?>
                </td>

                
                
              </tr>
              <?php
              }
              ?>
          
          </tbody>
        </table>
      </div>

      <br>
          
        
               

      <div class="u-expanded-width u-table u-table-responsive u-table-1" style="text-align: right">
      <a href="Pagina-seleccion-de-horario.php?id_p=<?php echo $id_p; ?>" type=""
          class="u-btn u-btn-submit u-button-style">
          Ver Citas Actuales
        </a>
      
      <!-- <a href="Tutoria_docente.php?id_p=<?php echo $id_p; ?>" type="" class="u-btn u-btn-submit u-button-style">
            Alumnos a Tutorar
            </a>
      -->

      <a href="Eventos_d.php?id_p=<?php echo $id_p; ?>" type=""
          class="u-btn u-btn-submit u-button-style">
          Evento
        </a>

      <a href="Eventos_d_edit.php?id_p=<?php echo $id_p; ?>" type=""
          class="u-btn u-btn-submit u-button-style">
          Mis Eventos
        </a>

      
      </div>

      <div class="modal fade" id="F1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Horas de Asesoria</h4>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                  aria-hidden="true">×</span></button>

            </div>

            <div class="modal-body">

              <form action="../php/prueba2.php?id_p=<?php echo $id_p; ?>"
                class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" method="POST" style="padding: 15px;"
                name="form">
                <div class="u-form-group u-form-message u-label-top u-form-group-1">

                 
                  <br>
                  <label class="u-label">Fecha</label>
                  <input type="date" id="Fecha" name="Fecha" class="form-control" readonly>

                  <br>
                  <div class="u-form-group u-form-group-3">
                    <label for="text-dc7d" class="u-label">Primera Hora de Asesoria Disponible</label>
                    <select id="select-ce47" name="primera_hora"
                      class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                      <option selected="true" value="Sin hora">Sin Hora</option>
                      <option value="7:00 a 8:00">7:00 a 8:00</option>
                      <option value="8:00 a 9:00">8:00 a 9:00</option>
                      <option value="9:00 a 10:00">9:00 a 10:00</option>
                      <option value="10:00 a 11:00">10:00 a 11:00</option>
                      <option value="11:00 a 12:00">11:00 a 12:00</option>
                      <option value="12:00 a 13:00">12:00 a 13:00</option>
                      <option value="13:00 a 14:00">13:00 a 14:00</option>
                      <option value="14:00 a 15:00">14:00 a 15:00</option>
                      <option value="15:00 a 16:00">15:00 a 16:00</option>
                      <option value="16:00 a 17:00">16:00 a 17:00</option>
                      <option value="17:00 a 18:00">17:00 a 18:00</option>
                      <option value="18:00 a 19:00">18:00 a 19:00</option>
                      <option value="19:00 a 20:00">19:00 a 20:00</option>
                      <option value="20:00 a 21:00">20:00 a 21:00</option>
                    </select>
                  </div>
                  <div class="u-form-group u-form-group-3">
                    <label for="text-dc7d" class="u-label">Segunda Hora de Asesoria Disponible</label>
                    <select id="select-ce47" name="segunda_hora"
                      class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                      <option selected="true" value="Sin hora">Sin Hora</option>
                      <option value="7:00 a 8:00">7:00 a 8:00</option>
                      <option value="8:00 a 9:00">8:00 a 9:00</option>
                      <option value="9:00 a 10:00">9:00 a 10:00</option>
                      <option value="10:00 a 11:00">10:00 a 11:00</option>
                      <option value="11:00 a 12:00">11:00 a 12:00</option>
                      <option value="12:00 a 13:00">12:00 a 13:00</option>
                      <option value="13:00 a 14:00">13:00 a 14:00</option>
                      <option value="14:00 a 15:00">14:00 a 15:00</option>
                      <option value="15:00 a 16:00">15:00 a 16:00</option>
                      <option value="16:00 a 17:00">16:00 a 17:00</option>
                      <option value="17:00 a 18:00">17:00 a 18:00</option>
                      <option value="18:00 a 19:00">18:00 a 19:00</option>
                      <option value="19:00 a 20:00">19:00 a 20:00</option>
                      <option value="20:00 a 21:00">20:00 a 21:00</option>
                    </select>
                  </div>
                  <div class="u-form-group u-form-group-3">
                    <label for="text-dc7d" class="u-label">Tercera Hora de Asesoria Disponible</label>
                    <select id="select-ce47" name="tercera_hora"
                      class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                      <option selected="true" value="Sin hora">Sin Hora</option>
                      <option value="7:00 a 8:00">7:00 a 8:00</option>
                      <option value="8:00 a 9:00">8:00 a 9:00</option>
                      <option value="9:00 a 10:00">9:00 a 10:00</option>
                      <option value="10:00 a 11:00">10:00 a 11:00</option>
                      <option value="11:00 a 12:00">11:00 a 12:00</option>
                      <option value="12:00 a 13:00">12:00 a 13:00</option>
                      <option value="13:00 a 14:00">13:00 a 14:00</option>
                      <option value="14:00 a 15:00">14:00 a 15:00</option>
                      <option value="15:00 a 16:00">15:00 a 16:00</option>
                      <option value="16:00 a 17:00">16:00 a 17:00</option>
                      <option value="17:00 a 18:00">17:00 a 18:00</option>
                      <option value="18:00 a 19:00">18:00 a 19:00</option>
                      <option value="19:00 a 20:00">19:00 a 20:00</option>
                      <option value="20:00 a 21:00">20:00 a 21:00</option>
                    </select>
                  </div>
                  <div class="u-form-group u-form-group-3">
                    <label for="text-dc7d" class="u-label">Cuarta Hora de Asesoria Disponible</label>
                    <select id="select-ce47" name="cuarta_hora"
                      class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                      <option selected="true" value="Sin hora">Sin Hora</option>
                      <option value="7:00 a 8:00">7:00 a 8:00</option>
                      <option value="8:00 a 9:00">8:00 a 9:00</option>
                      <option value="9:00 a 10:00">9:00 a 10:00</option>
                      <option value="10:00 a 11:00">10:00 a 11:00</option>
                      <option value="11:00 a 12:00">11:00 a 12:00</option>
                      <option value="12:00 a 13:00">12:00 a 13:00</option>
                      <option value="13:00 a 14:00">13:00 a 14:00</option>
                      <option value="14:00 a 15:00">14:00 a 15:00</option>
                      <option value="15:00 a 16:00">15:00 a 16:00</option>
                      <option value="16:00 a 17:00">16:00 a 17:00</option>
                      <option value="17:00 a 18:00">17:00 a 18:00</option>
                      <option value="18:00 a 19:00">18:00 a 19:00</option>
                      <option value="19:00 a 20:00">19:00 a 20:00</option>
                      <option value="20:00 a 21:00">20:00 a 21:00</option>
                    </select>
                  </div>

                  <div class="u-align-center u-form-group u-form-submit u-label-top u-form-group-2">

                    <button type="submit" class="btn btn-primary">MODIFICAR</button>

                  </div>

                </div>

              </form>

            </div>

          </div>

        </div>

      </div>



      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <tbody class="u-table-body">

          <div id='calendar' style="background:white"></div>
          <script>



            document.addEventListener('DOMContentLoaded', function () {
              var calendarEl = document.getElementById('calendar');
              var today = moment().startOf('day');
              var startOfWeek = moment().startOf('week');

              var calendar = new FullCalendar.Calendar(calendarEl, {

                initialView: 'dayGridMonth',
                locale: "es",
                backgroundColor: 'blue',
                //validar rango de dias que estan bloqueados
                validRange: {
                  //solo muestra la semana
                  start: startOfWeek.format('YYYY-MM-DD')
                },
                headerToolbar: {
                  left: 'prev,dayGridWeek,dayGridDay,next',
                  center: 'title',
                  right: 'today'
                },
                dateClick: function (info) {
                  $("#F1").modal('show');
                  if (info.allDay) {
                    $('#Fecha').val(info.dateStr);

                  }
                }
              });
              calendar.render();


            });

          </script>

        </tbody>

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