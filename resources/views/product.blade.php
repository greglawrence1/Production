<x-app-layout>
<a href="{{ url('')}}">Home</a>
<a href="{{ url('/product/create')}}">Add Products</a>
    <div class="grid grid-cols-4">
    @foreach($products as $product)
        <x-product-card :product="$product"/>
    @endforeach
    </div>
</x-app-layout>