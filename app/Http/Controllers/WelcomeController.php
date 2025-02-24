<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Hello()
    {
        return view('Frontpage');
    }
    public function Next()
    {
        return view('Nextpage');
    }
    public function Page2()
    {
        return view('Page2');
    }
    public function Page3()
    {
        return view('Page3');
    }
}

