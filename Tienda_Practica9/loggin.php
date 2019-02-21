<?php

require ('cargarControladores.php');

session_start();

//creamos el objeto smarty y configurar los directorios
$smarty = new Smarty;
$smarty->template_dir = "./template";
$smarty->compile_dir = "./template_c";


//esta parte se ejecuta si han tratado de ire a otra pagina sin autentificarse
$msj = isset($_GET['msj']) ? $_GET['msj'] : null;


//conectamos

if (isset($_POST['conectar'])) {
//leemos usuari y pass
    $user = filter_input(INPUT_POST, 'user');
    $pass = filter_input(INPUT_POST, 'pass');
    if (ConexionPDO::validarUsuario($user, $pass)) {
        $_SESSION['user'] = $user;
        $smarty->assign('user', $_SESSION['user']);
        header("location:productos.php");
    } else {
        $smarty->assign('msj', "Verifica que has introducido bien los datos.");
        $smarty->display('loggin.tpl');
    }
} else {
    $smarty->assign('msj', $msj);
    $smarty->display('loggin.tpl');
}

