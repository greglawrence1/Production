<x-app-layout>
<a href="{{ url('')}}">Home</a>
<a href="{{ url('/product/create')}}">Add Products</a>
<form action="{{ route('product') }}" method="GET">
<label for="filter">Select a Filter:</label>
<select name="filter" id="filter">
  <option value="artist">Artist</option>
  <option value="title">Title</option>
  <option value="price">Price</option>
  
</select>
<button type="submit">Apply Filter</button>
</form>
<form action="{{ route('product') }}" method="GET">
    <input type="text" placeholder="Search.." name="search" id="search">
    <button type="submit">Search</button>
</form>

    <div class="grid grid-cols-4">
        @foreach($products as $product)
            <x-product-card :product="$product"/>
        @endforeach
    </div>

    {{ $products->links() }}
</x-app-layout>