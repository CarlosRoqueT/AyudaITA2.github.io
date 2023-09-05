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

      <h3 class="u-text u-text-default u-text-1">Informacion General</h3>

      <br>
      
      <tbody class="u-table-body">

        <div class="u-layout-grid u-list u-list-1">
          <div class="">
              <tr>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-1">

                    <h5 style="text-decoration: underline; text-align:center;" class="u-text u-text-default u-text-4">
                      Servicio Social
                    </h5>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Reporte</a>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Reporte final</a>
                    <br>
                      <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Ejemplo de reporte</a>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Ejemplo de reporte final</a>
                
                  </div>
                </div>
              </tr>
            
          </div>
        </div>

        <div class="u-layout-grid u-list u-list-1">
          <div class="">
              <tr>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-1">

                    <h5 style="text-decoration: underline; text-align:center;" class="u-text u-text-default u-text-4">
                      Residencias profesionales
                    </h5>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Reporte</a>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Reporte final</a>
                    <br>
                      <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Ejemplo de reporte</a>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> Ejemplo de reporte final</a>
                
                  </div>
                </div>
              </tr>
            
          </div>
        </div>

        <div class="u-layout-grid u-list u-list-1">
          <div class="">
              <tr>
                <div class="u-align-left u-container-style u-list-item u-repeater-item u-white u-list-item-1">
                  <div class="u-container-layout u-similar-container u-container-layout-1">

                    <h5 style="text-decoration: underline; text-align:center;" class="u-text u-text-default u-text-4">
                      Otros
                    </h5>
                    <br>
                    <a href="https://drive.google.com/file/d/1phQ4tl0F8vFS82psFlUkS04GtTa2EM_Y/view?usp=drive_link" download="Ejemplo_servicio_social">
                    *<img src="../images/documento.png" alt="" width="25px" height="25px"> a</a>
                    <br>
                    
                  </div>
                </div>
              </tr>
            
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