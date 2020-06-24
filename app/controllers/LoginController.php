<?php

namespace App\Controllers;

use App\Core\App;

class LoginController
{
    public function makeLogin() {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = App::get('database')->readLogin('usuarios', $email);
        if (empty($usuario)) {
            $message = array('E-mail não cadastrado!');
            return view('admin/login', compact('message'));
        }
        if ($usuario->senha != $senha) {
            $message = array('Senha incorreta!');
            return view('admin/login', compact('message'));
        }
        else {
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $nome = App::get('database')->getUser('usuarios', $_SESSION['email']);
            $_SESSION['nome'] = $nome->nome;
            return view('admin/admin-inicio');
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        return view('admin/login');
    }
}