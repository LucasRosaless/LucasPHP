<?
date_default_timezone_set('America/Argentina/Cordoba');

$dias_semana = array(
    "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"
);
$meses = array(
    "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"
);

$fecha_actual = $dias_semana[date('w')] . ' ' . date('j') . ' ' . $meses[date('n') - 1] . ' ' . date('Y') . ' / ' . date('H:i');


?>