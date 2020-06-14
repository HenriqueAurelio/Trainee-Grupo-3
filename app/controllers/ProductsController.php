<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController

{

    public function index()

    {

        $produtos = App::get('database')->selectAll('produtos');

        foreach($produtos as $produto){
            $produto->categoria=App::get('database')->selectCategory('nome', 'categoria', $produto->categoria_id);
        }

        //die(var_dump($produto));
        
        return view('admin/indexcrud', compact('produtos'));


    }

    public function criar(){

        App::get('database')->insert('produtos', [

            'nome' => $_POST['nome'],

            'foto' => $_POST['foto'],

            'descricao' => $_POST['descricao'],

            'preco' => $_POST['preco'],

            'categoria_id' => $_POST['categoria']
        
        ]);
        
        return redirect('produtos');

    }

    public function ler()
    
    {
        $produto=App::get('database')->selectOne('produtos', $_POST['id']);
        
        $produto[0]->categoria=App::get('database')->selectCategory('nome', 'categoria', $produto[0]->categoria_id);

        return view('admin/crud-forms-read', compact('produto'));
        
    }

    public function selecionarProduto()

    {

        $produto=App::get('database')->selectOne('produtos', $_POST['id']);
        
        //echo $produtos[0]->descricao;

        return view('admin/crud-forms-update', compact('produto'));
        
    }

    public function atualizar()
    
    {
        
        App::get('database')->update('produtos', [

            'nome' => $_POST['nome'],

            'foto' => $_POST['foto'],

            'descricao' => $_POST['descricao'],

            'preco' => $_POST['preco'],

            'categoria_id' => $_POST['categoria_id']
        
        ], $_POST['id']);
        
        return redirect('produtos');

    }

    public function deletar()
    
    {

        App::get('database')->delete('produtos', $_POST['id']);

        return redirect('produtos');

    }

}