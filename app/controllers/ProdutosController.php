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

        return view('site/products', compact('produtos'));
    }

    public function teste()
    {
        $produtos = App::get('database')->pesquisa('produtos', $_POST['pesquisa']);
        
        return view('site/products', compact('produtos'));
    }
}