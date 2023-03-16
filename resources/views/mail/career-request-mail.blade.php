<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flowly</title>
    <style>
        /* Stili per l'immagine/logo */
        .logo {
            display: block;
            margin: 0 auto;
            max-width: 200px;
            padding-top: 30px;
        }
        /* Stili per la griglia di layout */
        .container-fluid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: auto;
            justify-items: center;
            align-items: center;
            padding-top: 50px;
        }
        .col-12 {
            text-align: center;
            margin-bottom: 20px;
        }
        /* Stili per i titoli e il testo */
        h1, h4, p {
            font-family: Arial, sans-serif;
            color: #333;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        h4 {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        /* Stili per il pulsante "Back to the site" */
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            background-color: #333;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #666;
        }
        /* Stili per gli effetti visivi */
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    {{-- <img class="logo" src="https://www.example.com/images/logo.png" alt="Logo"> --}}
    <div class="container-fluid fade-in">
        <div class="col-12">
            <h1>We have received your request</h1>
            <h4>for the role of {{ $info['role'] }}</h4>
            <p>sent by email {{ $info['email'] }}</p>
        </div>
        <div class="col-12">
            <h4>with the message:</h4>
            <p>{{ $info['message'] }}</p>
        </div>
        <div class="col-12">
            <a href="{{ route('homepage') }}" class="btn">Back to the site</a>
        </div>
    </div>
</body>
</html>