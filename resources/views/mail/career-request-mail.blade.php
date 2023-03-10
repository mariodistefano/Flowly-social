<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> {{$info['name']}} Abbiamo ricevuto la tua richiesta</h1>
    <h4>Per il ruolo di {{$info['role']}}</h4>
    <p>ricevuta dalla mail {{$info['email']}}</p>
    
    <h4>Con il seguente messaggio:</h4>
    <p> {{$info['message']}} </p>

    <form action="{{route('homepage')}}">
        <button type="submit" class="btn btn-primary">Ritorna al sito</button>
    </form>

</body>
</html>
