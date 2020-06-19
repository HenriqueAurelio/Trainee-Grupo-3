<?php
$router->get('categorias/cadastrar', 'CategoriasController@formview');
$router->get('categorias', 'CategoriasController@index');
$router->post('categorias/cadastrar', 'CategoriasController@store');
$router->post('categorias/delete', 'CategoriasController@delete');
$router->post('categorias/editar', 'CategoriasController@editform');
$router->post('categorias/editado', 'CategoriasController@update');
$router->post('categorias/mostrar', 'CategoriasController@show');
$router->get('categorias/voltar', 'CategoriasController@retuindex');

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

$router->get('usuarios', 'UsersController@index');
$router->post('usuarios', 'UsersController@store');

$router->get('usuarios/cadastrar', 'UsersController@usersCadastro');
$router->post('index', 'UsersController@store');
$router->post('usuarios/deletar', 'UsersController@delete');
$router->post('usuarios/editar', 'UsersController@edituser');
$router->post('usuarios/editado', 'UsersController@update');
$router->post('usuarios/visualizar', 'UsersController@show');
$router->get('usuarios/voltar', 'UsersController@usersreturn');

$router->get('produtos/vizualizar', 'ProdutosController@inventario');
$router->post('produtos/pesquisa', 'ProdutosController@teste');

