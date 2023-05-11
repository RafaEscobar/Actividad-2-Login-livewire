<html>
    <div class="container mx-auto px-4">
        <h1 class="text-3xl">Información: </h1>
        <span class="font-semibold">Nombre: </span>
        <p class=""> {{$name}}</p>
        <br>
        <span class="font-semibold">Calle: </span>
        <p class=""> {{$street}}</p>
        <br>
        <span class="font-semibold">Código postal: </span>
        <p class=""> {{$code}}</p>
        <br>
        <span class="font-semibold">Número exterior: </span>
        <p class=""> {{$numext}}</p>
        <br>
        <span class="font-semibold">Número interior: </span>
        <p class=""> {{$numint}}</p>
        <br>
        <span class="font-semibold">País: </span>
        <p class=""> {{$country}}</p>
        <br>
        <span class="font-semibold">Descripción: </span>
        <p class=""> {{$description}}</p>
        <br>
        @foreach ($images as $item)
            <img src="{{asset('storage/imgs/' . $item)}}" alt="..." width="100" height="100">
        @endforeach
    </div>
</html>