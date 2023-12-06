<div class="border-solid border-4 border-gray-600 bg-blue-500">
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
    <p>{{$product->title}}</p>
    <p>{{$product->artist}}</p>
    <p>{{$product->price}}</p>
    <p>{{$product->type}}</p>
    @if(Route::currentRouteName()=='product')
    <button value = "{{$product['id']}}" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-2 rounded-full select-product">Select</button>
    @else 
    <button value = "{{$product['id']}}" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-2 rounded-full buy-product">Buy</button>
    @endif
    <button value = "{{$product['id']}}" class="bg-red-400 hover:bg-red-700 text-white font-bold py-2 px-2 rounded-full buy-product">Buy</button>
</div>
