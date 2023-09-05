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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js"></script>
    <script src="https://momentjs.com/downloads/moment.js"></script>
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
            <img class="u-image u-image-contain u-image-round u-radius-10 u-image-1" src="../images/logo_tecnm.png"
                alt="" data-image-width="285" data-image-height="141">
            <img class="u-image u-image-contain u-image-round u-radius-10 u-image-2" src="../images/logo_ITA.png" alt=""
                data-image-width="2034" data-image-height="738">
        </div>
    </header>

    <section class="u-clearfix u-gradient u-section-1" id="sec-4d1f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default u-text-1">
                <?php $materia = $_GET['materia'];
                echo $materia;
                ?>
            </h2>

            <?php
            $id_p = $_GET['id_p'];
            $id_a = $_GET['id_a'];
            $id_m = $_GET['id_m'];

            $fecha = $_POST['Fecha'];
            $sub_tema = $_POST['tema'];
            $tipo = $_POST['tipo'];
            $duda = htmlentities($_POST['duda']);

            ?>
            <h2 class="u-text u-text-default u-text-white u-text-1">Seleccionar Hora de la Cita</h2>
            <div class="u-form u-form-1">

                <form action="../php/prueba.php?id_a=<?php echo $id_a; ?>&id_p=<?php echo $id_p; ?>&id_m=<?php echo $id_m; ?>
                    &Fecha=<?php echo $fecha; ?>&tema=<?php echo $sub_tema; ?>&duda=<?php echo $duda; ?>&tipo=<?php echo $tipo; ?>"
                    class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" method="POST"
                    style="padding: 15px;" name="form">
                    <div class="u-form-group u-form-message u-label-top u-form-group-1">

                        <label for="message-6797" class="u-label u-text-body-alt-color">Fecha</label>
                        <input type="date" id="Fecha" name="Fecha" value="<?php echo $fecha ?>" class="form-control"
                            readonly>

                        <label class="u-label u-text-body-alt-color">¿Cuantos alumnos acudiran a la cita (incluyendote)?</label>
                        <select id="alumnos" name="alumnos"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5 - 10">5 - 10</option>
                            <option value="11- 20 o mas">11- 20 o mas</option>
                        </select>

                        <label for="message-6797" class="u-label u-text-body-alt-color">Alguno de los alumnos cuenta con una capacidad diferente</label>
                        <label for="message-6797" class="u-label" style="" ></label>
                        <input type="text" id="capacidad_ex" name="capacidad_ex" class="form-control" 
                        placeholder="Escribe aqui las capacidades diferentes">

                        <?php
                        $con = "SELECT * from horario WHERE id_profesor =$id_p AND fecha='$fecha'";
                        $result = mysqli_query($connection, $con); ?>
                        <label class="u-label u-text-body-alt-color">¿A que hora sera la cita?</label>
                        <select id="Hora" name="hora"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                            <?php
                            while ($most = mysqli_fetch_array($result)) {
                                ?>
                                <?php if ($most['hora1'] != 'Sin hora') {
                                    ?>
                                    <option value="<?php echo $most['hora1']; ?>"><?php echo $most['hora1']; ?></option>
                                    <?php
                                }
                                ?>
                                <?php if ($most['hora2'] != 'Sin hora') {
                                    ?>
                                    <option value="<?php echo $most['hora2']; ?>"><?php echo $most['hora2']; ?></option>
                                    <?php
                                }
                                ?>
                                <?php if ($most['hora3'] != 'Sin hora') {
                                    ?>
                                    <option value="<?php echo $most['hora3']; ?>"><?php echo $most['hora3']; ?></option>
                                    <?php
                                }
                                ?>
                                <?php if ($most['hora4'] != 'Sin hora') {
                                    ?>
                                    <option value="<?php echo $most['hora4']; ?>"><?php echo $most['hora4']; ?></option>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>
                        </select>



                        <br>

                        <div class="u-align-center u-form-group u-form-submit u-label-top u-form-group-2">

                            <button type="submit" class="btn btn-primary">ENVIAR</button>

                        </div>

                    </div>

                </form>


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