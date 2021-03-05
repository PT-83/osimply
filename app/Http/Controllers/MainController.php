<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    
    {        
        return view ('home');
    }

    public function about()
    
    {
        return view ('about');
    }

    public function pricing()
    
    {
        return view ('pricing');
    }

    public function contact()
    {
        return view ('contact');
    }
    
}
