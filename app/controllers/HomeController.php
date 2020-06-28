<?php

namespace App\Controllers;

use App\Core\App;

class HomeController
{
    public function homelancamentos()
    {
        $homelancas = App::get('database')->lancamentos('produtos');
        $homedes = App::get('database')->showdes('produtos');
        return view('site/home', compact('homelancas', 'homedes'));
    }
}    
