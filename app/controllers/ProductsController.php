<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController
{
    public function index() {
        $produtos = App::get('database')->selectAll('produtos');

        foreach($produtos as $produto) {
            $produto->categoria = App::get('database')->selectAttr('categorias', 'nome', $produto->categoria_id);
        }

        return view('admin/produtos', compact('produtos'));
    }

    public function create() {
        App::get('database')->insert('produtos', [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'foto' => $_POST['foto'],
            'descricao' => $_POST['descricao'],
            'categoria_id' => $_POST['categoria_id']
        ]);

        return redirect('admin/produtos');
    }

    public function update() {
        App::get('database')->edit('produtos', [
            'nome' => $_POST['nome'],
            'preco' => $_POST['preco'],
            'foto' => $_POST['foto'],
            'descricao' => $_POST['descricao'],
            'categoria_id' => $_POST['categoria_id']
        ], $_POST['id']);

        return redirect('admin/produtos');
    }

    public function show() {
        $produto = App::get('database')->read('produtos', $_POST['id']);

        $produto->categoria = App::get('database')->selectAttr('categorias', 'nome', $produto->categoria_id);
        
        return view('admin/produto_unico', compact('produto'));
    }

    public function delete() {
        App::get('database')->delete('produtos', $_POST['id']);

        return redirect('admin/produtos');
    }
}