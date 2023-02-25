<?php 

    // Coleção de rotas
    $rotas = [
        'inicio' => 'main@index',
        'loja' => 'main@loja',
    ];

    // Ação por defeito
    $acao = 'inicio';

    // Verifica se existe a ação na lista
    if (isset($_GET['a'])) 
    {
        
        // Ação existe nas rotas
        if (!key_exists($_GET['a'], $rotas))
        {
            $acao = 'inicio';
        }else
        {
            $acao = $_GET['a'];
        }
    }

    // Tratar a definição da rota
    $partes = explode('@', $rotas[$acao]);
    $controlador = 'core\\controladores\\'.ucfirst($partes[0]);
    $metodo = $partes[1];

    $ctr = new $controlador();
    $ctr->$metodo();

?>