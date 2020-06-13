<?php

$router->get('', 'PagesController@home');
$router->get('novoproduto', 'PagesController@createProduct');
$router->post('editarproduto', 'PagesController@editarProduto');
$router->get('sobre', 'PagesController@sobre');

$router->get('produtos', 'ProductsController@index');
$router->post('produtos', 'ProductsController@create');
$router->post('produtos/editar', 'ProductsController@update');
$router->post('produtos/mostrar', 'ProductsController@show');
$router->post('produtos/deletar', 'ProductsController@delete');