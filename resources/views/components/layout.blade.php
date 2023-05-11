<<<<<<< HEAD
<div class="container mx-auto px-5 bg-cyan-50	">
    <h1 class="text-3xl">Información de: {{$title}}</h1>
    <div class="grid grid-cols-2 gap-2">
        {{ $slot }}
    </div>
</div>
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ $title ?? '' }} </title>

</head>
<body>

    {{ $slot }}
    
</body>
</html>
>>>>>>> ef26b227352f222c4761a7292dbcf18e0c1f1983
