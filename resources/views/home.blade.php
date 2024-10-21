<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIRST LARAVEL PROJECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <main>
        <div class="container mt-5">
            <h1 class="text-center">
                <strong>{{$titolo}}</strong>
            </h1>
            <ul>
                @foreach ($lista as $list)
                <li class="text-center list-unstyled">
                    {{$list}}
                </li>
                @endforeach
            </ul>
        </div>
    </main>

</body>
</html>
