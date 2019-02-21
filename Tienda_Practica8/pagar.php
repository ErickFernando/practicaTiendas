<?php

require ('cargarcontroladores.php');
require ('controlador.php');

$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";

//recuperamos al usuario y los productos de la cesta
$user = $_SESSION['user'];
$productos = $_SESSION['productosT'];

//calcullamos el iva 
$totalSinIva = $_SESSION['total'];
$totalConIva = $_SESSION['total'] * 0.21;
$cantidadProdcutos = 0;
foreach ($productos as $i => $va) {
    $cantidadProdcutos += $va[2];
}
//precio total con iva
$resumenTotal = $totalConIva + $totalSinIva;
//creamos el objeto Pfd;
$pdf = new Pfd();
$pdf->AliasNbPages();
$pdf->AddPage();


//asignamos un color a la celdas
$pdf->SetFillColor(232, 232, 232);

//creamos las celdas
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(125, 6, 'Producto', 1, 0, 'C', 1);

$pdf->Cell(30, 6, 'Cantidad', 1, 0, 'C', 1);
$pdf->Cell(30, 6, 'Precio', 1, 0, 'C', 1);

$pdf->Ln(10);
//agreamos valores a las celdas
foreach ($productos as $i => $value) {
    $pdf->Cell(125, 15, $value[1], 1, 0, 'L', 0);
    $pdf->Cell(30, 15, $value[0], 1, 0, 'R', 1);
    $pdf->Cell(30, 15, $value[2], 1, 0, 'R', 1);
    $pdf->Ln();
}

$pdf->Cell(125, 6, 'Precio sin Iva', 1, 0, 'L', 1);
$pdf->Cell(60, 6, round($totalSinIva, 2) . " euros", 1, 0, 'C', 1);
$pdf->Ln();
$pdf->Cell(125, 6, 'Iva', 1, 0, 'L', 1);
$pdf->Cell(60, 6, round($totalConIva, 2) . " euros", 1, 0, 'C', 1);
$pdf->Ln();
$pdf->Cell(125, 6, 'Total', 1, 0, 'L', 1);
$pdf->Cell(60, 6, round($resumenTotal, 2) . " euros", 1, 0, 'C', 1);
$pdf->Ln();
$pdf->Output();


//$Fechahoy = getdate();
//$Fechahoy = $Fechahoy['mday'] . " - " . $Fechahoy['mon'] . " - " . $Fechahoy['year'];
//
//$smarty->assign('Fechahoy', $Fechahoy);
//$smarty->assign('TotalsinIva', $totalSinIva);
//$smarty->assign('TotalconIva', $totalConIva);
//$smarty->assign('cantidadProductos', $cantidadProdcutos);
//$smarty->assign('TotalResumen', $resumenTotal);
//$smarty->assign('productos', $productos);
//$smarty->assign('user', $user);
//$smarty->display('pagar.tpl');

