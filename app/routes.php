<?php

$router->get('admin', 'PagesController@login');
$router->get('admin/novoproduto', 'PagesController@createProduct');
$router->post('editarproduto', 'PagesController@editarProduto');
$router->get('sobre', 'PagesController@sobre');

$router->get('admin/produtos', 'ProductsController@index');
$router->post('produtos', 'ProductsController@create');
$router->post('produtos/editar', 'ProductsController@update');
$router->post('produtos/mostrar', 'ProductsController@show');
$router->post('produtos/deletar', 'ProductsController@delete');
$router->post('produtos/limite', 'ProductsController@indexLimit');

$router->post('login', 'LoginController@makeLogin');
$router->post('logout', 'LoginController@logout');

$router->post('informacoes-produto', 'ProductsController@produtoInfo');

$router->get('contato', 'PagesController@contato');

$router->get('admin/home', 'PagesController@admin');