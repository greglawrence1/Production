<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASE</title>
    @vite('resources/css/app.css')
    <script src="{{asset('js/my.js') }}"></script>
</head>
<body>
    <h1>Component 2</h1>

    {{$slot}}
</body>
</html>