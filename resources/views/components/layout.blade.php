<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>The Fool</title>
        {{-- linknavbar --}}
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        {{-- fontawesome --}}
        <script src="https://kit.fontawesome.com/68b14aed80.js" crossorigin="anonymous"></script>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    <body class="light">

        <x-navbar/>
            
        <div id="body-div" class="body">
            {{$slot}}
        </div>

    {{-- <x-footer /> --}}

    </body>

</html>