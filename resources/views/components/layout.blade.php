<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulab Post</title>
    {{-- linknavbar --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<<<<<<< HEAD
</head>
<body>
    

                


               
                    <x-navbar />
                    
                <div id="body-div" class="body">
                    {{$slot}}
                    {{-- <x-footer /> --}}
                </div>

        
    
    
  

    

=======
>>>>>>> 891e3492a0c899eecc5dc7f215d20fe9bd215098
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/68b14aed80.js" crossorigin="anonymous"></script>
</head>
<body>
     
    <x-nav2 />
        
    <div class="body">
        {{$slot}}
        {{-- <x-footer /> --}}
    </div>

</body>
</html>