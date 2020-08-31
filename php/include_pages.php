<?php

    //Retorna a URL desejada
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    //Verifica se a página existe
    if (file_exists('pages/'.$url.'.php'))
        include('pages/'.$url.'.php'); //Caso exista, ela é incluida e mostrada
    else
        echo "deu ruim";
        //header("Location: pages/erro404.php"); //Caso não exista, ocorre o redirecionamento para a página de Erro404
?>