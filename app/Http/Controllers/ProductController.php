<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        /*
        if(Route::current()->getName()=='menu')
        $products = Product::inRandomOrder()->limit(5)->get();
        else
        */

        $project = Product::query();
        /*if(request('search')){
            $project->where('artist', 'like', '%' . request('search') . '%');
        */   
        $typeChoice = $request->input('typeChoice');
        $search = $request->input('search');
        $filter = $request->input('filter');
        $orderDefault = $filter ?? 'artist';
        $products = Product::orderBy($orderDefault);
        if($search){
            $products-> where('artist', 'like', '%' . request('search') . '%');
        }
        if($typeChoice){
            $products->where('product_type_id', $typeChoice);
        }

        $products = $products->paginate(2);
        return view('product', ['products' => $products]);
        
        //$products = Product::all();
        //return view('product', ['products'=>$products]);
              
    }
    /**
     * Display random ones
     */
    public function browse()
    {
        if(Route::current()->getName()=='browse')
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

        if($request->file('file')!=null){
            $imagename = $request->file('file')->store('public/images');
            $data->imagename = str_replace("public/images/", "", $imagename);
        }
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
        /*
        $product = Product::find($id);
        $product->title = $request->get('title');
        $product->artist = $request->get('artist');
        $product->price = $request->get('price');
        $product->type = $request->get('type');

        //$product->save();
        */
        $product = Product::find($id);
        $product->update([
            'type'=> $request->type,
            'artist'=> $request->artist,
            'title'=> $request->title,
            'price'=>$request->price,
        ]);
        
        $product->update($request->all());
        $product->save();
    
        return redirect()->route('product');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        //return response()->json(["msg"=>"success"]);
        return redirect()->route('product');
    }

    public function __construct()
    {
        //$this->authorizeResource(Product::class, 'product');
    }
}
