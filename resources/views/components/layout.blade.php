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

</head>
<body class="">
    <div class="container-fluid">
        <div class="row">

            <div class="col-3 mx-0 px-0 vh-100">
                <x-navbar />

            </div>

            <div class="col-9 mx-0 p-0">
                <div class="">

                    {{$slot}}
                    {{-- <x-footer /> --}}
                </div>
            </div>

        </div>
    </div>
    
  

    

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/68b14aed80.js" crossorigin="anonymous"></script>
</body>
</html>