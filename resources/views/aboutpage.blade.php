<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text -x1 text-gray-800 leading-tight">
            About Us
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../styles.css">
    <div class="p-6 bg-white border-b border-gray-200">
        <p>Welcome to our climbing website Apex Climbing Co</p>
    </div>
    <h1 style="text-align: center">A Peak Into some of the new Bouldering Walls!</h1>
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="\images\wall1.jpg" style="width:35%">
      <div class="text">Wall 1 with new v5</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="\images\wall2.jpg" style="width:35%">
      <div class="text">Wall 2 with brand new holds</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="\images\wall3.jpg" style="width:35%">
      <div class="text">Wall 3 with nasty new slabs</div>
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
</x-app-layout>