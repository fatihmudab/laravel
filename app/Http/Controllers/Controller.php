<?php

namespace App\Http\Controllers;


    

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home.blade.php');
    }

    public function porto()
    {
        return view('/porto');
    }
}
}
