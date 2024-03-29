<?php 

    // Coleção de rotas
    $rotas = [
        'inicio' => 'main@index',
        'menu' => 'main@menu',
        'cadastro' => 'main@cadastro',
        'login' => 'main@login',
        'suporte' => 'main@suporte',
        'sobre' => 'main@sobre',
        'oquefazemos' => 'main@oquefazemos',
        'comousar' => 'main@comousar',
        'informarbug' => 'main@informarbug',
        'outros' => 'main@outros',
        'reclamacao' => 'main@reclamacao',
        'erro' => 'main@erro',
        'logout' => 'main@logout',
        'adm' => 'main@adm',
        'cadComidas' => 'main@cadComidas',
        'cadTipo' => 'main@cadTipo',
        'cadMenuTipo' => 'main@cadMenuTipo',
        'menuTipo' => 'main@menuTipo',
        'deleteMenuTipo' => 'main@deleteMenuTipo',
        'deleteTipo' => 'main@deleteTipo',
        'tipo' => 'main@tipo',
        'edit' => 'main@edit',
        'delete' => 'main@delete',
        'comidas' => 'main@comidas',
        'finalizarCompras' => 'main@finalizarCompras'
    ];

    // Ação por defeito
    $acao = 'inicio';

    // Verifica se existe a ação na lista
    if (isset($_GET['a'])) 
    {
        
        // Ação existe nas rotas
        if (!key_exists($_GET['a'], $rotas))
        {
            $acao = 'erro';
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