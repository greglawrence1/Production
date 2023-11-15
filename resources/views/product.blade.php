<x-app-layout>
    <div>
    @foreach($products as $product)
        <x-product-card :product="$product"/>
    @endforeach
    </div>
</x-app-layout>