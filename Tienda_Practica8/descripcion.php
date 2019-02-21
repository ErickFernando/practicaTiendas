<?php

require ('cargarcontroladores.php');
require ('controlador.php');

$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";
$user = $_SESSION['user'];

$productos = $_GET['productos'];

$desc = ConexionPDO::buscaValor("producto", $productos);
$ordenador = ConexionPDO::buscaValor("ordenador", $productos);

$smarty->assign('desc', $desc);
$smarty->assign('ordenador', $ordenador);
$smarty->display('descripcion.tpl');