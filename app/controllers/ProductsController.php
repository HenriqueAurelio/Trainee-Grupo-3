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

}