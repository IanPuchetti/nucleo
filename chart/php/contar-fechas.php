<?php

function date_range($first, $last, $step = '+1 day', $output_format = 'd/m/Y' ) {
    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last);
    while( $current <= $last ) {
        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
    }
    return $dates;
}

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id_campania=$request->id_campania;
$fecha=$request->fecha;
$mysqli = new mysqli("localhost", "ian", "p", "nucleo");
$rows = array();
$rews = array();
if ($result = $mysqli->query("SELECT DISTINCT gestiones.fecha, COUNT(grupos_casos.deudor) AS cantidad FROM grupos_casos INNER JOIN gestiones ON grupos_casos.gestionado = gestiones.id WHERE grupos_casos.id_campania= '$id_campania' GROUP BY gestiones.fecha")) {
while ($r = mysqli_fetch_assoc($result)) {
       $rows[] =  $r;
    }
}
if ($result2 = $mysqli->query("SELECT * FROM campanias WHERE id= '$id_campania' ")) {
while ($r = mysqli_fetch_assoc($result2)) {
       $rews[] =  $r;
    }
}

$periodo = date_range($rews[0]['fecha_generacion'], $rews[0]['fecha_finalizacion']);

$all = (object)[
 'fechas' => $rows,
 'campania' => $rews,
 'periodo' => $periodo
 ];
echo json_encode($all);

$mysqli->close();
?>
