<?php

namespace App\Controllers;

use App\Core\App;

class UsersController
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
        $users = App::get('database')->selectAll('usuarios');
        $users_limite = App::get('database')->selectLimitProducts('usuarios', 0);

        return view('admin/users', compact('users', 'users_limite'));
    }

    public function indexLimit() {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $users = App::get('database')->selectAll('usuarios');
        $users_limite = App::get('database')->selectLimitProducts('usuarios', $_POST['offset']);

        return view('admin/users', compact('users', 'users_limite'));
    }

    /**
     * Store a new user in the database.
     */

    public function store()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        App::get('database')->insert('usuarios', [
            'email' => $_POST['email'], 
            'nome' => $_POST['nome'],
            'senha' => $_POST['senha']
        ]);

        return redirect('usuarios');
    }
    public function update()
    {
        App::get('database')->edit('usuarios', [
            'email' => $_POST['email'],
            'nome' => $_POST['nome'], 
            'senha' => $_POST['senha']
        ], $_POST['id']);


        return redirect('usuarios');
    }    
    public function show()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
       $usuarioRead = App::get('database')->read('usuarios',
       $_POST['id']
       );

        return view('admin/showusers', compact('usuarioRead'));

    }

    public function delete()
    {
        App::get('database')->delete('usuarios',
        $_POST['id']    
        );
        //die(var_dump( $_POST['id'])); 
        
        return redirect('usuarios');

    }
    
    public function usersCadastro()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        return view("admin/usersform");

    }

    public function edituser()
    {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        $usuer = App::get('database')->editmodifi('usuarios',
        $_POST['id']
        );

        return view ("admin/editusers", compact('usuer'));
    }

    public function usersreturn()
    {
        return redirect('usuarios');
    }

    public function search() {
        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }

        $users = App::get('database')->pesquisaEmail('usuarios', $_POST['pesquisa']);

        $pesquisa = $_POST['pesquisa'];

        $pesquisa = array($pesquisa);

        return view('admin/users', compact('users', 'pesquisa'));
    }
}