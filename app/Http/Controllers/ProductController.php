<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

     return view('view', compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return product
        return view('product');
        $user = User::find([3,4]);
        $product->users()->attach($user);
        return 'Sucess';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
         'product_name' => 'required|max:255',
         'product_price' => 'required|alpha_num',
         'product_size' => 'required|numeric',
         'product_colour' => 'required|max:255',
         'product_type' => 'required|max:255',
     ]);
     $product = Product::create($validatedData);

     return redirect('/products')->with('success', 'Your Product Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);

        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
         'product_name' => 'required|max:255',
         'product_price' => 'required|alpha_num',
         'product_size' => 'required|numeric',
         'product_colour' => 'required|max:255',
         'product_type' => 'required|max:255',
     ]);
        Product::whereId($id)->update($validatedData);

        return redirect('/products')->with('success', 'Product is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product is successfully deleted');
    }
}
