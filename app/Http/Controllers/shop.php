<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shop extends Controller
{
    public function home()
    {
        return view('site.home');
    }


public function about()
{
    return view ('site.about');
}

public function product()
{
    return view ('site.product');
}


}
