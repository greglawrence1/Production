<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text -x1 text-gray-800 leading-tight">
            About Us
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../styles.css">
    <h1 style="text-align: center">Basic Climbing Equipment you will need to get you started!</h1>
    <div class="row">
        <div class="column">
          <img src="\images\chalkbag.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
        </div>
        <div class="column">
          <img src="\images\climbingshoes.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
        </div>
        <div class="column">
          <img src="\images\chalk.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
        </div>
        <div class="column">
          <img src="\images\yogamat.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
        </div>
      </div>
      
      <!-- The Modal/Lightbox -->
      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
      
          <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="\images\chalkbag.jpg" style="width:35%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="\images\climbingshoes.jpg" style="width:35%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="\images\chalk.jpg" style="width:35%">
          </div>
      
          <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="\images\yogamat.jpg" style="width:35%">
          </div>
      
          <!-- Next/previous controls -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
          <!-- Caption text -->
          <div class="caption-container">
            <p id="caption"></p>
          </div>
      
          <!-- Thumbnail image controls -->
          <div class="column">
            <img class="demo" src="\images\chalkbag.jpg" onclick="currentSlide(1)" alt="Chalk Bag">
          </div>
      
          <div class="column">
            <img class="demo" src="\images\climbingshoes.jpg" onclick="currentSlide(2)" alt="Climbing Shoes">
          </div>
      
          <div class="column">
            <img class="demo" src="\images\chalk.jpg" onclick="currentSlide(3)" alt="Chalk">
          </div>

          <div class="column">
            <img class="demo" src="\images\yogamat.jpg" onclick="currentSlide(4)" alt="Yogamat">
          </div>
        </div>
      </div>
    <div class="p-6 bg-white border-b border-gray-200">
        <h3 class="text-lg font-semibold mb-2">What is Bouldering?</h3>
        <p>Bouldering is a form of climbing performed mostly indoors without ropes or harnesses on artifical walls, can also be done outside on small rock faces</p>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/JtzthnwhDPI" frameborder="0" allowfullscreen></iframe>
    <div class="p-6 bg-white border-b border-gray-200">
        <h3 class="text-lg font-semibold mb-2">How to Boulder Safetly?</h3>
        <p>As there are no ropes, extra precaution certainly has to be taken, so knowing how and when to climb is extremely important</p>
    </div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/9zbxIg4fqpc" frameborder="0" allowfullscreen></iframe>
</x-app-layout>