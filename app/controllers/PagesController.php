<?php

namespace App\Controllers;

class PagesController

{
    
    public function admin()

    {

        session_start();
        if (!isset($_SESSION['email'])) {
            return redirect('admin');
        }
        
        return view('admin/admin-inicio');

    }

}