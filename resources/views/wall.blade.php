<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text -x1 text-gray-800 leading-tight">
            Wall
        </h2>
    </x-slot>
    <link rel="stylesheet" href="../styles2.css">

    <div class="img-magnifier-container">
        <img id="jug" src="\images\jug.jpg.webp" width="400" height="200" alt="Jug">
        <div class="image-description" style="padding: 1.5rem; background-color: white; border-bottom: 1px solid white;">
        <h1  style="text-lg font-semibold mb-2">Jug</h1>
        <p>A jug is the best hold on the wall, there is a lot of space for your hand to get a firm grip to be able to pull yourself up</p>
        </div>
      </div>
      <div class="img-magnifier-container">
        <img id="krimp" src="\images\krimp.png" width="400" height="200" alt="Crimp">
          <div class="image-description"style="padding: 1.5rem; background-color: white; border-bottom: 1px solid white;">
        <h1  style="text-lg font-semibold mb-2">Crimp</h1>
        <p>Small holds for one finger maybe two if you're lucky, tough hold to pull yourself up on, not for beginners</p>
        </div>
      </div>
      <div class="img-magnifier-container">
        <img id="sloper" src="\images\sloper.jpg" width="400" height="200" alt="Sloper">
          <div class="image-description" style="padding: 1.5rem; background-color: white; border-bottom: 1px solid white;">
        <h1 style="text-lg font-semibold mb-2">Sloper</h1>
        <p>Rounded holds, not for using just a finger but getting a grip with your entire hand to create friction between you and the hold</p>
        </div>
      </div>
      <div class="img-magnifier-container">
        <img id="pinch" src="\images\pinch.jpg" width="400" height="200" alt="Pinch">
          <div class="image-description" style="padding: 1.5rem; background-color: white; border-bottom: 1px solid white;">
        <h1  style="text-lg font-semibold mb-2">Pinch</h1>
        <p>Pinches are similar to what you mat think they are, your hand grips the whole hold, with your thumb on one side and your fingers on the other</p>
        </div>
      </div>
      <script>
          magnify("jug", 3);
          magnify("krimp", 3);
          magnify("sloper", 3);
          magnify("pinch", 3);
      </script>
</x-app-layout>