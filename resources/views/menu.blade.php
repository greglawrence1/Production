<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASE</title>
    @vite('resources/css/app.css')
 
    <script src="{{asset('js/app.js') }}"></script>
    <script src="{{asset('js/bootstrap.js') }}"></script>
    <script src="{{asset('js/my.js') }}"></script>
    <link rel="stylesheet" href="../styles.css">
</head>
<body style="background-image: url('images/background.jpg'); background-size: cover; background-position: center; z-index: -1;">
   <nav class="bg-gray-800 shadow z-10 h-16">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="\images\apexclimbingco.jpg" alt="Logo" class="h-8">
            </div>
            <!-- Navigation links -->
            <div class="hidden md:block">
                <div class="flex items-center space-x-4">
                    @can('create', App\Models\Product::class)
                    <a href="{{ url('/product/create')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Add Products</a>
                    @endcan
                    <a href="{{ url('/')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ url('/about')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About Us</a>
                    <a href="{{ url('/bouldering')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">What is Climbing</a>
                    <a href="{{ url('/product')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Products</a>     
                    <a href="{{ url('/prod')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Lucky Products</a>
                    @guest
                    <a href="{{ url('/login')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    <a href="{{ url('/register')}}" class="text-white hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                    @endguest
                    @auth
                    @include('layouts.settings_dropdown')
                    @endauth
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

<h1>Apex Climbing Co</h1>
<img src="\images\apexclimbingco.jpg" alt="Logo" class="h-400 w-300 mx-auto">

<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="\images\wall1.jpg" style="width:25%">
      <div class="text">Caption Text</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="\images\wall2.jpg" style="width:25%">
      <div class="text">Caption Two</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="\images\wall3.jpg" style="width:25%">
      <div class="text">Caption Three</div>
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</body>

<br>
