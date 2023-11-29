
<h1>Componenent 2 - Gregory Lawrence</h1>
<a href="{{ url('/product')}}">Products</a>
@can('create', App\Models\Product::class)
<a href="{{ url('/product/create')}}">Add Products</a>
@endcan
<div>
    @auth
        @include('layouts.settings_dropdown')
    @endauth
    @guest
    <a href="{{ url('/login')}}">Login</a>
    <a href="{{ url('/register')}}">Register</a>
    @endguest
</div>
<br>
