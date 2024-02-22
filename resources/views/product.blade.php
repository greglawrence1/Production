<x-app-layout>
<div class="flex space-x-4">
<form action="{{ route('product') }}" method="GET" class="flex">
<label for="filter" class="mr-2"></label>
<select name="filter" id="filter" class="mr-2 px-4 py-2 border border-gray-300 rounded-md">
  <option value="name">Name</option>
  <option value="brand">Brand</option>
  <option value="price">Price</option>
  
</select>
<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Apply Filter</button>
</form>
<form action="{{ route('product') }}" method="GET" class="flex">
    <input type="text" placeholder="Search.." name="search" id="search" class="mr-2 px-4 py-2 border border-gray-300 rounded-md">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
</form>
<form action="{{ route('product') }}" method="GET" class="flex">
<label for="typeChoice"></label>
<select name="typeChoice" id="typeChoice" class="mr-2 px-4 py-2 border border-gray-300 rounded-md">
  <option value="2">Climbing Shoes</option>
  <option value="1">Chalk Bag</option>
  <option value="3">Chalk</option>
  
</select>
<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Apply Type Filter</button>
</form>
</div>

    <div class="grid grid-cols-4">
        @foreach($products as $product)
            <x-product-card :product="$product"/>
        @endforeach
    </div>
@if(Route::currentRouteName() == 'product')
    {{ $products->links() }}
@endif
</x-app-layout>