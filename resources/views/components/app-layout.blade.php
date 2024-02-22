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
</head>

<body class="background">
    
    @include('menu')

    {{$slot}}

</body>

</html>