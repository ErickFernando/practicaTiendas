<?php
//cargamos las clases y smarty
require ('Smarty.class.php');
spl_autoload_register(function($clase) {
    require_once "$clase.php";
});

