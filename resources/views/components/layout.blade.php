<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulab Post</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
    <x-navbar />

    <div class="body">

        {{$slot}}
        {{-- <x-footer /> --}}
    </div>

    
    
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/68b14aed80.js" crossorigin="anonymous"></script>
</body>
</html>