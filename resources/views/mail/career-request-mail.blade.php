<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> {{$info['name']}} We have received your request</h1>
    <h4>for the role of {{$info['role']}}</h4>
    <p>sent by email {{$info['email']}}</p>
    
    <h4>whit the message:</h4>
    <p> {{$info['message']}} </p>

    <form action="{{route('homepage')}}">
        <button type="submit" class="btn btn-primary">Back to the site</button>
    </form>

</body>
</html>
