<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    public function index() {
        $produtos = App::get('database')->selectAllProducts('produtos');

        foreach($produtos as $produto) {
            $produto->categoria = App::get('database')->selectAttrProducts('categorias', 'nome', $produto->categoria_id);
        }

        return view('admin/products/produtos', compact('produtos'));
    }

    public function create() {
        App::get('database')->insertProducts('produtos', [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'foto' => $_POST['foto'],
            'descricao' => $_POST['descricao'],
            'categoria_id' => $_POST['categoria_id']
        ]);

        return redirect('produtos');
    }

    public function update() {
        App::get('database')->editProducts('produtos', [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'foto' => $_POST['foto'],
            'descricao' => $_POST['descricao'],
            'categoria_id' => $_POST['categoria_id']
        ], $_POST['id']);

        return redirect('produtos');
    }

    public function show() {
        $produto = App::get('database')->readProducts('produtos', $_POST['id']);

        $produto->categoria = App::get('database')->selectAttrProducts('categorias', 'nome', $produto->categoria_id);
        
        return view('admin/products/produto_unico', compact('produto'));
    }

    public function delete() {
        App::get('database')->deleteProducts('produtos', $_POST['id']);

        return redirect('produtos');
    }
}