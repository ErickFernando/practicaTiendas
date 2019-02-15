<?php

session_start();
//miro si estoy loggeado
if (!isset($_SESSION['user'])) {
    header("Location:loggin.php?msj=Debes loggearte");
    exit();
}


if (isset($_POST['desconectar'])) {
    session_destroy();
    header("Location:loggin.php?msj=Gracias por su visita");
    exit();
}
?>


