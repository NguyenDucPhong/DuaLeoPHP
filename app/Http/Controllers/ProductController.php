<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::latest()->paginate(8);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function addToCart($id){
        $product = Product::find($id);
        $cart = session()->get('cart', []);
        
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }else{
           $cart[$id] = [
            'product_name' => $product->name,
           'image' => $product->image,
           'classify' => $product->classify,
           'origin'    =>  $product->origin,
           'price'  =>  $product->price,
           'quantity' => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product success to cart successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Product::all();
        $product = Product::find($id);
        return view('detail', compact('product', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
