<?php 
    define("BASE_URL","http://localhost/Uml_poo_groupe1_G12");
    // define("BASE_URL", "/campus2");
    require_once('./libs/Router.php');
    $router= new Router();
    $router->route();