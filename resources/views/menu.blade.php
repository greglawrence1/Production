
<h1>Climbing Products</h1>
<link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
<div class="topnav">
<a href="{{ url('/product')}}">Products</a>
<a href="{{ url('/prod')}}">Browse 5 products</a>
@can('create', App\Models\Product::class)
<a href="{{ url('/product/create')}}">Add Products</a>
@endcan
</div>
<div>
    @auth
        @include('layouts.settings_dropdown')
    @endauth
    @guest
    <a href="{{ url('/login')}}">Login</a>
    <a href="{{ url('/register')}}">Register</a>
    @endguest
</div>

<nav class="bg-gray-800 shadow">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="#" class="text-white text-lg font-semibold">Logo</a>
            </div>
            <!-- Navigation links -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </div>
            <!-- Mobile menu button (hidden on larger screens) -->
            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
<br>
