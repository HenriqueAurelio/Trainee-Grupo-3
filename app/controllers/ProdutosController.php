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
        $categorias = App::get('database')->selectAlfCat('categorias');
        $produtos_limite = App::get('database')->selectLimitProductsFront('produtos', 0);

        return view('site/products', compact('produtos','categorias', 'produtos_limite'));
    }

    public function indexLimit() {
        $produtos = App::get('database')->selectAll('produtos');
        $categorias = App::get('database')->selectAlfCat('categorias');
        $produtos_limite = App::get('database')->selectLimitProductsFront('produtos', $_POST['offset']);

        return view('site/products', compact('produtos', 'categorias', 'produtos_limite'));
    }


    public function teste()
    {   
        $categorias = App::get('database')->selectAlfCat('categorias');
        $produtos = App::get('database')->pesquisa('produtos', $_POST['pesquisa']);
        $pesquisa = $_POST['pesquisa'];

        $pesquisa = array($pesquisa);
        
        return view('site/products', compact('produtos','categorias', 'pesquisa'));
    }

    public function categoriasPr()
    {   
        $categorias = App::get('database')->selectAlfCat('categorias');
        $produtos = App::get('database')->categoriaspr('produtos',$_POST['Catid']);
        $cat = App::get('database')->read('categorias', $_POST['Catid']);     
        return view('site/products', compact('produtos','categorias', 'cat'));
    }
}