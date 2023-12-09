<x-app-layout>
<a href="{{ url('')}}">Home</a>
<a href="{{ url('/product/create')}}">Add Products</a>
    <div class="grid grid-cols-4">
            <x-product-card :product="$product"/>
    </div>
</x-app-layout>