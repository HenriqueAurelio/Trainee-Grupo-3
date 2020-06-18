<?php

namespace App\Controllers;

use App\Core\App;

class ProductsController

{

    public function produtoInfo()

    {

        $produto=App::get('database')->read('produtos', $_POST['id']);

        return view('site/produto-info', compact('produto'));
        
    } 

}