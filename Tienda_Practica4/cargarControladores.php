<?php
//cargamos smarty y las demas clases
require ('Smarty.class.php');
spl_autoload_register(function($clase) {
    require_once "$clase.php";
});

