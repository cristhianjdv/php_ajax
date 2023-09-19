<?php
ob_start("ob_gzhandler"); /* solo si quieres comprimir el arcivo PHP */
///if(!isset($_SESSION)){ session_start(); } /* para ocasiones donde se requiera recordar la sesion */
header('Access-Control-Allow-Origin: *');  /* obligatorio para el consumo de la API */

$op = isset($_POST['op']) ? $_POST['op'] : ''; /* aqui recibimos lo que deseamos mostrar */
$resp = "";
/* empezamos la consulta */
switch($op){
    case '1': /* Muestra la hora */
            $resp = date('Y-m-d G:i:s');
        break;
    case '2':/* Muestra un texto */

            $resp = "
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod leo ut molestie interdum. Vestibulum ac auctor eros, eu tempor dui. Maecenas euismod ullamcorper libero, et consequat purus consectetur sed. Aenean convallis nunc et risus malesuada, ac eleifend nisl elementum. Ut laoreet dictum diam eu pretium. Nulla vulputate risus tellus, et cursus eros porttitor nec. Integer eget condimentum magna, nec imperdiet dolor. Quisque id interdum augue, ut rhoncus urna. Nunc ultricies felis non neque cursus tempus. Curabitur felis lacus, cursus non neque non, efficitur tincidunt sem. Duis blandit erat eu turpis interdum, vitae tristique diam lacinia. In hac habitasse platea dictumst. Mauris sit amet eros et tellus convallis semper. Donec luctus purus quis nibh mattis rhoncus.
            ";

        break;
    default:/* solo para los curiosos que no envien ninguna opcion */
            $resp = "no hay nada aqui";
        break;
}
    /* en data guardo un array donde en la propiedad resultado almacenara lo que deseo mostrar. */
    $data = ["resultado"=>$resp]; 

echo json_encode($data); /* lo envio */