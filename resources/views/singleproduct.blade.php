<x-app-layout>
    @extends('layout')
    @section('content')

    <div class="grid grid-cols-4">
            <x-product-card :product="$product"/>
            <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary btn-block text-center" role="button">Add to cart</a> </p>
    </div>
   
</x-app-layout>