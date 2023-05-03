<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductAdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::latest()->paginate(8);

        return view('product', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $request->validate([
            'name'          =>  'required',
            'classify'      => 'required',
            'origin'        =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=20,min_height=20,max_width=1000,max_height=1000',
            'quantity'      =>  'required',
            'price'         =>  'required'

        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $file_name);

        // $image = $request->file('image');
        // $file_name = time() . '.' . $image->getClientOriginalExtension();
        // $file_path = $image->storeAs('public/images', $file_name);

        $product = new Product;

        $product->name = $request->name;
        $product->classify = $request->classify;
        $product->origin = $request->origin;
        $product->image = $file_name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductAd $productAd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name'      =>  'required',
            'classify'  =>  'required',
            'origin'    =>  'required',
            'quantity'  =>  'required',
            'price'     =>  'required',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=20,min_height=20,max_width=1000,max_height=1000',
        ]);

        $file_image = $request->hidden_image;

        if($file_image != '')
        {
            $file_image = time() . '.' . request()->image->getClientOriginalExtension();

            request()->image->move(public_path('images'), $file_image);
        }

        // $file_image = time() . '.' . request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('images'), $file_image);

        $product = Product::find($request->hidden_id);

        $product->name = $request->name;

        $product->classify = $request->classify;

        $product->origin = $request->origin;

        $product->image = $file_image;

        $product->quantity =$request->quantity;

        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product Data deleted successfully');
    }
}
