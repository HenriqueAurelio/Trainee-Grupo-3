<?php

$router->get('', 'PagesController@contato');

$router->get('produtos', 'ProductsController@index');

$router->get('crud-forms', 'PagesController@adicionar');

$router->post('produtos/criar', 'ProductsController@criar');

$router->post('produtos/deletar', 'ProductsController@deletar');

$router->post('produtos/editar', 'ProductsController@selecionarProduto');

$router->post('produtos/atualizar', 'ProductsController@atualizar');

$router->post('produtos/ler', 'ProductsController@ler');



