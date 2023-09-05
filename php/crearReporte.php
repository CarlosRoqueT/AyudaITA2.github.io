<?php

include("connection.php");

require_once dirname(__FILE__) . '/PHPWord/src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

use PhpOffice\PhpWord\TemplateProcessor;

$documento = new TemplateProcessor('Asesoria.docx');
$id_p = $_GET['id_p'];

$sql = "SELECT * FROM cita2 INNER JOIN estudiante ON cita2.id_alumno=estudiante.num_contr 
INNER JOIN profesor ON cita2.id_profesor=profesor.num_contrP
WHERE id_profesor='$id_p'";
$result = mysqli_query($connection, $sql);
$rows = mysqli_num_rows($result);
$n = 0;
$a = $rows;
while ($most = mysqli_fetch_array($result)) {


    $nombre_profesor = $most['nombreP'];
    $apellidos_profesor = $most['apellidoP'];


    $n_cont = $most['num_contr'];
    $nombre_estudiante = $most['nombre'];
    $apellidos_estudiante = $most['apellidos'];
    $semestre = $most['semestre'];
    $carrera = $most['carrera'];
    $duda = $most['duda'];
    $hora = $most['hora'];
    $dia = $most['dia'];
    $firma = 'FIRMA';

    $documento->setValue('nombre_profesor', $nombre_profesor);
    $documento->setValue('apellidos_profesor', $apellidos_profesor);


    $documento->setValue('n_cont' . $n, $n_cont);
    $documento->setValue('nombre_estudiante' . $n, $nombre_estudiante);
    $documento->setValue('apellidos_estudiante' . $n, $apellidos_estudiante);
    $documento->setValue('semestre' . $n, $semestre);
    $documento->setValue('carrera' . $n, $carrera);
    $documento->setValue('duda' . $n, $duda);
    $documento->setValue('hora' . $n, $hora);
    $documento->setValue('dia' . $n, $dia);
    $documento->setValue('firma' . $n, $firma);

    $n = $n + 1;

}

do{

    $documento->setValue('n_cont' . $a, '');
    $documento->setValue('nombre_estudiante' . $a, '');
    $documento->setValue('apellidos_estudiante' . $a, '');
    $documento->setValue('semestre' . $a, '');
    $documento->setValue('carrera' . $a, '');
    $documento->setValue('duda' . $a, '');
    $documento->setValue('hora' . $a, '');
    $documento->setValue('dia' . $a, '');
    $documento->setValue('firma' . $a, '');
    $a=$a+1;

}while($a<=19);




$documento->saveAs('Prueba.docx');

header("Content-Disposition: attachment; filename=Prueba.docx; charset=iso-8859-1");
echo file_get_contents('Prueba.docx');

?>