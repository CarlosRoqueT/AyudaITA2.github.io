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
  <title>Escojer_hora</title>
  <link rel="stylesheet" href="../css/du_escoj_soli.css" media="screen">
  <link rel="stylesheet" href="../css/principal.css" media="screen">
  <meta name="generator" content="Nicepage 5.0.7, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Escojer_hora">
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
  <section class="u-clearfix u-gradient u-section-1" id="sec-8359">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-default u-text-1">
        <?php echo $_GET['materia']; ?>
      </h2>
      <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <table class="u-table-entity">
          <colgroup>

            <col width="33.3%">
            <col width="33.400000000000006%">
          </colgroup>
          <thead class="u-black u-table-header u-table-header-1">
            <tr style="height: 40px;">

              <th class="u-border-1 u-border-black u-table-cell">Nombre</th>
              <th class="u-border-1 u-border-black u-table-cell">Correo</th>
            </tr>
          </thead>
          <tbody class="u-table-body">
            <tr style="height: 75px;">

              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-5">
                <?php echo $_GET['nombrep'];
                echo "<br>";
                echo $_GET['apellidop']; ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-6">
                <?php echo $_GET['correop']; ?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="u-table u-table-responsive u-table-2">
        <table class="u-table-entity">
          <colgroup>
            <col width="16.7%">
            <col width="16.7%">
            <col width="16%">
            <col width="17.4%">
            <col width="16.7%">
            <col width="16.500000000000004%">
          </colgroup>
          <thead class="u-palette-4-base u-table-header u-table-header-2">
            <tr style="height: 56px;">
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-7">Hora</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-8">Lunes</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-9">Martes</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-10">Miercoles
              </th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-11">Jueves</th>
              <th class="u-border-1 u-border-custom-color-1 u-custom-color-1 u-table-cell u-table-cell-12">Viernes</th>
            </tr>
          </thead>
          <tbody class="u-table-body">

            <?php
            $idm = $_GET['id_pr'];
            $id_a =$_GET['id_a'];
            $id_m=$_GET['id_m'];
            
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

            $hora1 = '7:00 a 8:00';
            $hora2 = '8:00 a 9:00';
            $hora3 = '9:00 a 10:00';
            $hora4 = '10:00 a 11:00';
            $hora5 = '11:00 a 12:00';
            $hora6 = '12:00 a 13:00';
            $hora7 = '13:00 a 14:00';
            $hora8 = '14:00 a 15:00';
            ?>




            <tr style="height: 81px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-13">7:00 a 8:00
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">

                <?php
                if ($mostL['hora1'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora1; ?>"><?php echo $mostL['hora1'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora1'];
                } ?>

              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora1'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora1; ?>"><?php echo $mostMA['hora1'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora1'];
                } ?>
                
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora1'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora1; ?>"><?php echo $mostMI['hora1'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora1'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora1'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora1; ?>"><?php echo $mostJ['hora1'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora1'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora1'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora1; ?>"><?php echo $mostV['hora1'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora1'];
                } ?>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-19"> 8:00 a 9:00
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora2'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora2; ?>"><?php echo $mostL['hora2'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora2'];
                } ?>

                
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora2'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora2; ?>"><?php echo $mostMA['hora2'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora2'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora2'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora2; ?>"><?php echo $mostMI['hora2'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora2'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora2'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora2; ?>"><?php echo $mostJ['hora2'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora2'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora2'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora2; ?>"><?php echo $mostV['hora2'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora2'];
                } ?>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-25"> 9:00 a 10:00
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora3'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora3; ?>"><?php echo $mostL['hora3'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora3'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora3'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora3; ?>"><?php echo $mostMA['hora3'];?></a>
                <?php
                } else {
                  echo $mostMA['hora3'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora3'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora3; ?>"><?php echo $mostMI['hora3'];?></a>
                <?php
                } else {
                  echo $mostMI['hora3'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora3'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora3; ?>"><?php echo $mostJ['hora3'];?></a>
                <?php
                } else {
                  echo $mostJ['hora3'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora3'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora3; ?>"><?php echo $mostV['hora3'];?></a>
                <?php
                } else {
                  echo $mostV['hora3'];
                } ?>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-31"> 10:00 a
                11:00</td>
              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora4'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora4; ?>"><?php echo $mostL['hora4'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora4'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora4'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora4; ?>"><?php echo $mostMA['hora4'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora4'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora4'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora4; ?>"><?php echo $mostMI['hora4'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora4'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora4'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora4; ?>"><?php echo $mostJ['hora4'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora4'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora4'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora4; ?>"><?php echo $mostV['hora4'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora4'];
                } ?>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-37">11:00 a 12:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora5'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora5; ?>"><?php echo $mostL['hora5'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora5'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora5'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora5; ?>"><?php echo $mostMA['hora5'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora5'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora5'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora5; ?>"><?php echo $mostMI['hora5'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora5'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora5'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora5; ?>"><?php echo $mostJ['hora5'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora5'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora5'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora5; ?>"><?php echo $mostV['hora5'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora5'];
                } ?>
              </td>


            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-43">12:00 a 13:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora6'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora6; ?>"><?php echo $mostL['hora6'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora6'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora6'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora6; ?>"><?php echo $mostMA['hora6'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora6'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora6'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora6; ?>"><?php echo $mostMI['hora6'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora6'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora6'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora6; ?>"><?php echo $mostJ['hora6'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora6'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora6'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora6; ?>"><?php echo $mostV['hora6'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora6'];
                } ?>
              </td>
            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-49">13:00 a 14:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora7'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora7; ?>"><?php echo $mostL['hora7'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora7'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora7'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora7; ?>"><?php echo $mostMA['hora7'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora7'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora7'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora7; ?>"><?php echo $mostMI['hora7'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora7'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora7'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora7; ?>"><?php echo $mostJ['hora7'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora7'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora7'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora7; ?>"><?php echo $mostV['hora7'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora7'];
                } ?>
              </td>

            </tr>
            <tr style="height: 86px;">
              <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-55">14:00 a 15:00</td>

              <td class="u-border-1 u-border-grey-30 u-grey-10 u-table-cell u-table-cell-14">
              <?php
                if ($mostL['hora8'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostL['dia']; 
                    ?>&hora=<?php echo $hora8; ?>"><?php echo $mostL['hora8'];?></a>
                   
                <?php
                } else {
                  echo $mostL['hora8'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-15 u-table-cell u-table-cell-15">
              <?php
                if ($mostMA['hora8'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMA['dia']; 
                    ?>&hora=<?php echo $hora8; ?>"><?php echo $mostMA['hora8'];?></a>
                   
                <?php
                } else {
                  echo $mostMA['hora8'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-25 u-table-cell u-table-cell-16">
              <?php
                if ($mostMI['hora8'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostMI['dia']; 
                    ?>&hora=<?php echo $hora8; ?>"><?php echo $mostMI['hora8'];?></a>
                   
                <?php
                } else {
                  echo $mostMI['hora8'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-30 u-table-cell u-table-cell-17">
              <?php
                if ($mostJ['hora8'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostJ['dia']; 
                    ?>&hora=<?php echo $hora8; ?>"><?php echo $mostJ['hora8'];?></a>
                   
                <?php
                } else {
                  echo $mostJ['hora8'];
                } ?>
              </td>
              <td class="u-border-1 u-border-grey-30 u-grey-40 u-table-cell u-table-cell-18">
              <?php
                if ($mostV['hora8'] == "Libre") {?>
                  <a
                    class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1"
                    href="Duda.php?id_p=<?php echo $idm;?>&id_a=<?php echo $id_a; ?>&id_m=<?php echo $id_m; ?>&dia=<?php echo $mostV['dia']; 
                    ?>&hora=<?php echo $hora8; ?>"><?php echo $mostV['hora8'];?></a>
                   
                <?php
                } else {
                  echo $mostV['hora8'];
                } ?>
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