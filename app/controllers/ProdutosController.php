<?php

namespace App\Controllers;

use App\Core\App;

class ProdutosController
{
    /**
     * Show all users.
     */
    public function inventario()
    {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAll('categorias');

        return view('site/products', compact('produtos','categorias'));
    }

    public function teste()
    {   
        $categorias = App::get('database')->selectAll('categorias');
        $produtos = App::get('database')->pesquisa('produtos', $_POST['pesquisa']);
        
        return view('site/products', compact('produtos','categorias'));
    }

    public function categoriasPr()
    {   
        $categorias = App::get('database')->selectAll('categorias');
        $produtos = App::get('database')->categoriaspr('produtos',$_POST['Catid']);
        
        
        return view('site/products', compact('produtos','categorias'));
    }
}