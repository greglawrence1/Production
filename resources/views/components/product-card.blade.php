<div class="border-solid border-4 border-gray-600 bg-blue-500">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    @if($product->productType['id']==1)
    <div class="bg-green-600 p-1 rounded-lg shadow-lg">
    @elseif($product->productType['id']==2)
    <div class="bg-purple-300 p-1 rounded-lg shadow-lg">
    @elseif($product->productType['id']==3)
    <div class="bg-yellow-200 p-1 rounded-lg shadow-lg">
    @endif
    <p>{{$product->brand}}</p>
    <p>{{$product->name}}</p>
    <p>{{$product->price}}</p>
    <img src="\images\no_image.jpg">
    @if ($product->imagename=="no_image.png")
    <img src="{{asset('images/'.$product->imagename)}}" alt="product" class= "m-5 w-40 max-w-xs">
    @else 
    <img src="{{asset('storage/images/'.$product->imagename)}}" alt="product" class= "m-5 w-40 max-w-xs">
    @endif    
    <p>{{$product->productType->type}}</p>
    @if(Route::currentRouteName()=='product')
    <button value = "{{$product->id}}" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-2 rounded-full select-product">Select</button>
    @else
        @can('purchase-product')
        <button value = "{{$product['id']}}" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-2 rounded-full buy-product">Buy</button>
        @endcan
        @can('edit-product', App\Models\Product::class)
        <button value = "{{$product['id']}}" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-2 rounded-full update-product">Edit</button>
        @endcan
    @endif
</div>
