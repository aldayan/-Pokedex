<?php


require_once '../ayuda/utilidad.php';
require_once 'estu.php';
require_once '../service/ServiceBase.php';
require_once 'EstudianteCookie.php';

$service  = new EstudianteCookie();

$isContainId = isset($_GET['id']);

if($isContainId){

    $estudianteId = $_GET['id'];
    $service->Delete($estudianteId);
}

header("Location: ../index.php");
exit();

?>