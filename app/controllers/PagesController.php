<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home() {
        return view('admin/index');
    }

    public function createProduct() {
        $categorias = App::get('database')->selectAll('categorias');

        return view('admin/formprodutos', compact('categorias'));
    }

    public function editarProduto() {
        $id = $_POST['id'];

        $categorias = App::get('database')->selectAll('categorias');

        $produto = App::get('database')->read('produtos', $id);

        return view('admin/editarprodutos', compact('produto', 'categorias'));
    }
}