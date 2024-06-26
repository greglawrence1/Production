<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text -x1 text-gray-800 leading-tight">
            About Us
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../styles2.css">
    <div class="row">
        <div class="column">
          <div class="card">
            <img src="\images\blank.png" alt="Jane" style="width:100%">
            <div class="container">
              <h2>Greg Lawrence</h2>
              <p class="title">CEO &amp; Founder</p>
              <p>Started with the idea of a climbing wesbite back in 2023 with the hope to inspire others to climb.</p>
              <p>g.lawrence6468@student.leedsbeckett.ac.uk</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="\images\blank.png" alt="Mike" style="width:100%">
            <div class="container">
              <h2>Bob</h2>
              <p class="title">Product Designer</p>
              <p>Collegue from day one, with the ambition to create the perfecting climbing equipment.</p>
              <p>bob@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="\images\blank.png" alt="John" style="width:100%">
            <div class="container">
              <h2>Alice</h2>
              <p class="title">Marketing</p>
              <p>Our marketing expert from day one, to get our name out there.</p>
              <p>alice@example.com</p>
              <p><button id="contact" class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>