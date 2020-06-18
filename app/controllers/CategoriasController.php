<?php

namespace App\Controllers;

use App\Core\App;

class CategoriasController
{
    /**
     * Show all users.
     */
    public function index()
    {
        $categorias = App::get('database')->selectAll('categorias');

        return view('admin/categorias', compact('categorias'));
    }

    /**
     * Store a new user in the database.
     */

    public function store()
    {
        App::get('database')->insert('categorias', [
            'nome' => $_POST['nome']
        ]);
        /*$categorias = App::get('database')->selectAll('categorias');
        return view('admin/categorias', compact('categorias'));*/
        return redirect('categorias');
    }

    public function update()
    {
        App::get('database')->edit('categorias', [
            'nome' => $_POST['nome']
            
        ], $_POST['id']);
        
        return redirect('categorias');
    }

    public function show(){
        $categoriasRead = App::get('database')->read('categorias', $_POST['id']);

        return view('admin/showcategorias', compact('categoriasRead'));
    }
    public function delete(){
        App::get('database')->delete('categorias',$_POST['id']);
        
        return redirect('categorias');
    }

    public function formview()
    {
        return view("admin/categoriasform");
    }
    public function formedit()
    {
        return view("admin/editcategorias");
    }
    public function editform(){
        $categ=App::get('database')->seledit('categorias',$_POST['id']);
        
        return view("admin/editcategorias", compact('categ'));
    }
    public function retuindex(){
        return redirect('categorias');
    }
     
}
