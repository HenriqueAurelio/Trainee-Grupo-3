<?php

namespace App\Controllers;

use App\Core\App;

class HomeController
{
    /**
     * Show all users.
     */
    public function homeindex()
    {
        $homeprodutos = App::get('database')->selectAll('produtos');
        return view('site/home', compact('homeprodutos'));
    }
}