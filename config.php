<?php

    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    //Autoload para as classes do PHP
    $autoload = function($class){
        include('class/'.$class.'.php');
    };
    spl_autoload_register($autoload);

    //Definir o caminho padrão do site
    define('INCLUDE_PATH', 'http://localhost/GitHub/Estudos/CRUD-PHP_POO/');

    //Definir os dados do BD
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'crud');



?>