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
        $users = App::get('database')->selectAll('usuarios');

        return view('admin/users', compact('users'));
    }

    /**
     * Store a new user in the database.
     */

    public function store()
    {
        App::get('database')->insert('usuarios', [
            'email' => $_POST['email'], 
            'senha' => $_POST['senha']
        ]);

        $users = App::get('database')->selectAll('usuarios');

        return view('admin/users', compact('users'));
    }
    public function update()
    {
        App::get('database')->insert('usuarios', [
            'email' => $_POST['email'], 
            'senha' => $_POST['senha']
        ], $_POST['id']);


        return redirect('usuarios');
    }    
    public function show()
    {
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
        return view("admin/usersform");

    }

    public function edituser()
    {
        $usuer = App::get('database')->editmodifi('usuarios',
        $_POST['id']
        );

        return view ("admin/edituser", compact('usuer'));
    }

    public function usersreturn()
    {
        return redirect('usuarios');
    }
}