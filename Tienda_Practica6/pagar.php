<?php

require ('cargarcontroladores.php');
require ('controlador.php');

$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

$user = $_SESSION['user'];
$productos= $_SESSION['productos'];

$totalSinIva =$_SESSION['total'];
$totalConIva =$_SESSION['total']*0.21;
$cantidadProdcutos=0;
foreach ($productos as $key => $cantidad) {
    $cantidadProdcutos+=$cantidad;
}
$resumenTotal= $totalConIva+$totalSinIva;


$Fechahoy = getdate();
$Fechahoy=$Fechahoy['mday']." - ".$Fechahoy['mon']." - ".$Fechahoy['year'];

$smarty->assign('Fechahoy', $Fechahoy);
$smarty->assign('TotalsinIva', $totalSinIva);
$smarty->assign('TotalconIva', $totalConIva);
$smarty->assign('cantidadProductos', $cantidadProdcutos);
$smarty->assign('TotalResumen', $resumenTotal);
$smarty->assign('productos', $productos);
$smarty->assign('user', $user);
$smarty->display('pagar.tpl');

