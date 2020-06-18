<?php

namespace App\Controllers;

class PagesController

{

    public function home()

    {

        return view('index');

    }
    
    public function contato()

    {

        return view('site/contato');

    }

    public function adicionar()

    {

        return view('admin/crud-forms');

    }

    public function admin()

    {

        return view('admin/admin-inicio');

    }



}