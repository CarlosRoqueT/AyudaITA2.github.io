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
      <div class="u-expanded-width u-table u-table-responsive u-table-1" style="text-align: right">
        <?php $id_p = $_GET['id_p'];
        $nombre = $_GET['nombre'];
        $apellidos = $_GET['apellidos'];
        ?>
        <div class="row">
          <div class="col-md-4">
            <a href="Tutoria_docente.php?id_p=<?php echo $id_p; ?>" type="" class="u-btn u-btn-submit u-button-style">
              < Regresar </a>
          </div>
        </div>
      </div>
      <h2 class="u-text u-text-default u-text-1">
        <?php echo $nombre;
        echo "<br>";
        echo $apellidos; ?>
      </h2>

      <h2 class="u-text u-text-default u-text-1">
        <?php $id_a = $_GET['id_a']; ?>
      </h2>
      <div class=" u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>
            <col width="15.0%">
            <col width="02.5%">
            <col width="32.5%">
            <col width="10.0%">
            <col width="10.0%">
            <col width="10.0%">
            <col width="10.0%">
            <col width="10.0%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-1">
            <tr style="height: 59px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Clave</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">RE</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">Materia</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">T01</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">T02</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">T03</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">T04</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-1">T05</th>
            </tr>
          </thead>
          <tbody class="u-table-body">

            <tr style="height: 74px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">AED1062TC2
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4"> </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Fundamentos de
                BD</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">87</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">82</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">85</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
            </tr>
            <tr style="height: 74px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">DAB2101TC2
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4"> </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Calculo Dif.
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">100</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">95</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">90</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">86</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
            </tr>
            <tr style="height: 74px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">DAB2102TC2
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">EP</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Algebra Lineal
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">90</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">92</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">90</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">100</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">83</td>
            </tr>
            <tr style="height: 74px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">TIF1007TC1
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">RE</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Matematicas
                Discr.</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
            </tr>
            <tr style="height: 74px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">TIF1021TC1
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4"> </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Telecom.</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">NA</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">85</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">NA</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">78</td>
            </tr>
            <tr style="height: 74px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">ACC0906TC3
              </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4"> </td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">Sis op. 2</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">70</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">80</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">90</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">100</td>
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-4">NA</td>
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