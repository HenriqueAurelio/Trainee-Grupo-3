<?php

$router->get('usuarios', 'UsersController@index');
$router->post('usuarios', 'UsersController@store');

$router->get('usuarios/cadastrar', 'UsersController@usersCadastro');
$router->post('index', 'UsersController@store');
$router->post('usuarios/deletar', 'UsersController@delete');
$router->post('usuarios/editar', 'UsersController@edituser');
$router->post('usuarios/editado', 'UsersController@update');
$router->post('usuarios/visualizar', 'UsersController@show');
$router->get('usuarios/voltar', 'UsersController@usersreturn');
