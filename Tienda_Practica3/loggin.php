<?php

require ('cargarControladores.php');

session_start();

//creamos el objeto smarty y configurar los directorios
$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";


//esta parte se jecuta si han tratado de entrar en otra pagina sin autenticarse
$msj = isset($_GET['msj']) ? $_GET['msj'] : null;


//conectamos, si el usuario existe

if (isset($_POST['conectar'])) {

    $user = filter_input(INPUT_POST, 'user');
    $pass = filter_input(INPUT_POST, 'pass');
    if (ConexionPDO::validarUsuario($user, $pass)) {
        $_SESSION['user'] = $user;
        $smarty->assign('user', $_SESSION['user']);
        header("location:listadoProductos.php");
    } else {
        $smarty->assign('msj', "Ella no te ama my friend.<br/> Verifica que has introducido bien los datos.");
        $smarty->display('loggin.tpl');
    }
} else {
     $smarty->assign('msj', $msj);
    $smarty->display('loggin.tpl');
}

