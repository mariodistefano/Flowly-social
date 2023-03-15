<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Fool</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <h1>We have received your request</h1>
                <h4>for the role of {{$info['role']}}</h4>
                <p>sent by email {{$info['email']}}</p>
            </div>
            <div class="col-12 col-md-8 col-lg-6">
                <h4>whith the message:</h4>
                <p> {{$info['message']}} </p>
            </div>
            
        </div>
    </div>



    {{-- <form action="{{route('homepage')}}">
        <button type="submit" class="btn btn-secondary">Back to the site</button>
    </form> --}}

</body>
</html>
