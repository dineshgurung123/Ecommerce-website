<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    


public function index(){


return view('index');

}

public function about(){

    return view ('about');
}

public function products(){

    return view ('products');
}

public function singleProduct(){

    return view ('singleProduct');
}

public function checkout(){

    return view ('checkout');
}


public function cart(){

    return view ('cart');
}




}
