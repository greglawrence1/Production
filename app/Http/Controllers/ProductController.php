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
        $data = $request->except('_token');
        $data[`type`] = $request->input('product_type_id');
        Product::create($data);
        //Product::create($request->except('_token'));
        
        //return Redirect::route('product');
        return redirect()->route('product');        
    }   

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        Product::find($id);
        $product = Product::find($id);
        //return view('product', ['products'=>$product]);
        return view('singleproduct', ['product'=>$product]);
         //return $products->artist;
         //return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $product = Product::find($id);
        return view('edit-products-form',  ['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, $id)
    {         
        
    $request->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'price' => 'required|numeric',
            'type' => 'required|exists:product_types,id',
        ]);

        $product = Product::findOrFail($id);
        
  
        $product->update($request->all());
        /*$product->update([
            'type'=> $request->type,
            'artist'=> $request->artist,
            'title'=> $request->title,
            'price'=>$request->price,
        ]);
*/
        return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(["msg"=>"success"]);
    }

    public function __construct()
    {
        //$this->authorizeResource(Product::class, 'product');
    }
}
