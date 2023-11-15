<x-app-layout>
    <div class="grid grid-cols-4">
    @foreach($products as $product)
        <x-product-card :product="$product"/>
    @endforeach
    </div>
</x-app-layout>