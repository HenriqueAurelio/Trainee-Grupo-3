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
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $categorias = App::get('database')->selectAll('categorias');

        $categorias_limite = App::get('database')->selectLimitProducts('categorias', 0);

        return view('admin/categorias/categorias', compact('categorias', 'categorias_limite'));
       
    }

    public function indexLimit() {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $categorias = App::get('database')->selectAll('categorias');
        $categorias_limite = App::get('database')->selectLimitProducts('categorias', $_POST['offset']);

        return view('admin/categorias/categorias', compact('categorias', 'categorias_limite'));
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
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $categoriasRead = App::get('database')->read('categorias', $_POST['id']);

        return view('admin/categorias/showcategorias', compact('categoriasRead'));
    }
    public function delete(){
        $categorias=App::get('database')->catdel('produtos',$_POST['id']);
        if(! $categorias){
            App::get('database')->delete('categorias',$_POST['id']);
            return redirect('categorias');
        } else {
            return view('admin\categorias\deletelivors');
        }
    }

    public function formview()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        return view("admin/categorias/categoriasform");
    }
    public function formedit()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        return view("admin/categorias/editcategorias");
    }
    public function editform(){
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $categ=App::get('database')->seledit('categorias',$_POST['id']);
        
        return view("admin/categorias/editcategorias", compact('categ'));
    }
    public function retuindex(){
        return redirect('categorias');
    }

    public function search()
    {   
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $categorias = App::get('database')->pesquisa('categorias', $_POST['pesquisa']);
        $pesquisa = $_POST['pesquisa'];

        $pesquisa = array($pesquisa);
        
        return view('admin/categorias/categorias', compact('categorias', 'pesquisa'));
    }

}
