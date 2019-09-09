<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    </head>
    <body>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->



    @include('layouts.notlogued')
    <div class="container-materias">
        @foreach($datos as $dato)
        <div class="card-materias border" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('img/'.$dato->image_url) }}" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $dato->name_m }}</h5>
                <p class="card-text">{{ $dato->description }}</p>
                @if (Auth::guest())
                        <a href="{{ route('login') }}" class="btn btn-primary"> <i class="fas fa-info-circle"></i>  Ingresar</a>
                    @else
                         <a href="{{action('MateriaController@verificarpass',['dato'=>$dato->subject_id])}}" class="btn btn-primary" type="" > <i class="fas fa-info-circle"></i>  Ingresar </a>
                @endif

            </div>
        </div>
        @endforeach
    </div>
    @include('layouts.footer')
    </body>
</html>
