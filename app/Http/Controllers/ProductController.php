<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Route::current()->getName()=='menu')
        $products = Product::inRandomOrder()->limit(5)->get();
        else
        $products = Product::all();
        return view('product', ['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {      
        return view('add-products-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        /*$product = new Product();
        $product->title = $request->title;
        $product->artist = $request->artist;
        $product->price = $request->price;

        $product->save();*/

        Product::create($request->except('_token'));
        //return Redirect::route('product');
        return redirect()->route('product');        
    }   

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
         $products = Product::find($id);
         return view('product', ['products'=>$products]);
         //return $products->artist;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //return view('product-form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return "Product gone";
    }

    public function __construct()
    {
        $this->authorizeResource(Product::class, 'product');
    }
}
