<?php 
    namespace Config;

    define("ROOT", dirname(__DIR__) . "/");
    define("FRONT_ROOT", "/E-commerce/");
    define("VIEWS_PATH", "Views/");

    define("COMERCE_NAME", "Ecommerce");
    
    define("CSS_PATH", FRONT_ROOT.VIEWS_PATH . "css/");
    define("JS_PATH", FRONT_ROOT.VIEWS_PATH . "js/");

    define("DB_HOST", "localhost");
    define("DB_NAME", "ecommerce");
    define("DB_USER", "root");
    define("DB_PASS", "");
?>