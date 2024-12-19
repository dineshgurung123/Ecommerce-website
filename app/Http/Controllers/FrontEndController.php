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


function add_to_cart(REQUEST $request)
{

    if ($request->session()->has('cart')) {
        $cart = $request->session()->get('cart');
        $product_ids = array_column($cart, 'id'); 
        if (!in_array($request->id,$product_ids)) {
            $id = $request->id;
            $name = $request->name;
            $image = $request->image;
            $quantity = $request->quantity;
            ($request->sale_price != null) ? $price = $request->sale_price : $price = $request->price;
            $product_array = array(
                'id' => $id,
                'name' => $name,
                'image' => $image,
                'quantity' => $quantity,
                'price' => $price
            );
            $cart[$request->id] = $product_array;
            $request->session()->put('cart', $cart);
            return view('cart');
        }
        else
        {
            return redirect()->back()->withErrors(['message'=>'product already added to cart']);
        }
    }
    else {
        // first time adding product to session called cart
        $id = $request->id;
        $name = $request->name;
        $image = $request->image;
        $quantity = $request->quantity;
        ($request->sale_price != null) ? $price = $request->sale_price : $price = $request->price;
        $product_array = array(
            'id' => $id,
            'name' => $name,
            'image' => $image,
            'quantity' => $quantity,
            'price' => $price
        );

        $cart[$request->id] = $product_array;
        $request->session()->put('cart', $cart);
        return view('cart');
    }
}



}
