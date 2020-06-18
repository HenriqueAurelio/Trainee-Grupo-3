<?php
$router->get('categorias/cadastrar', 'CategoriasController@formview');
$router->get('categorias', 'CategoriasController@index');
$router->post('categorias/cadastrar', 'CategoriasController@store');
$router->post('categorias/delete', 'CategoriasController@delete');
$router->post('categorias/editar', 'CategoriasController@editform');
$router->post('categorias/editado', 'CategoriasController@update');
$router->post('categorias/mostrar', 'CategoriasController@show');
$router->get('categorias/voltar', 'CategoriasController@retuindex');

