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
         
        $typeChoice = $request->input('typeChoice');
        $search = $request->input('search');
        $filter = $request->input('filter');
        $orderDefault = $filter ?? 'name';
        $products = Product::orderBy($orderDefault);
        if($search){
            $products-> where('name', 'like', '%' . request('search') . '%');
        }
        if($typeChoice){
            $products->where('product_type_id', $typeChoice);
        }

        $products = $products->paginate(2);
        return view('product', ['products' => $products]);
        
              
    }
    /**
     * Display random ones
     */
    public function browse()
    {
       
        $products = Product::inRandomOrder()->limit(3)->get();

        return view('product', ['products' => $products]);
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
       
        $data = $request->except('_token');
        $data[`type`] = $request->input('product_type_id');
        

        if($request->file('file')!=null){
            $imagename = $request->file('file')->store('public/images');
            $data->imagename = str_replace("public/images/", "", $imagename);
        }
        
        Product::create($data);
        
        return redirect()->route('product');        
    }   

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        Product::find($id);
        $product = Product::find($id);
        
        return view('singleproduct', ['product'=>$product]);
         
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
            'name' => 'required|max:255',
            'brand' => 'required|max:255',
            'price' => 'required|numeric',
            'type' => 'required|exists:product_types,id',
        ]);
        $product = Product::find($id);
        $product->update([
            'product_type_id'=> $request->type,
            'name'=> $request->name,
            'brand'=> $request->brand,
            'price'=>$request->price,
        ]);
        
        return redirect()->route('product');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        
        return redirect()->route('product');
    }

    public function __construct()
    {
        //$this->authorizeResource(Product::class, 'product');
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}
