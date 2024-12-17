<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    


public function index(){

 $products =  Product::all();

return view('index', ['products' => $products]);


}

public function about(){

    return view ('about');
}

public function products(){

    return view ('products');
}

public function singledproduct($id){

  $product = Product::find($id);

    return view ('single_product', ['product'=>$product]);

}

public function checkout(){

    return view ('checkout');
}


public function cart(){

    return view ('cart');
}




}
