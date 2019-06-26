<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    @include("layouts.navgrande")
    <div class="container" style="margin-top: 20px; margin-bottom: 20px">
        <form class="text-center border p-2" role="form" method="post" style="margin: 10px; background-color: white; border-radius: 20px" action="{{action('MateriaController@store')}}">
            {{csrf_field()}}

            <p class="h4 mb-4">Menú Materia</p>
            <div class="text-center" style="margin-left: 250px; margin-right: 250px;">
                <input type="text" id="materia" name="materia" class="form-control mb-4" placeholder="Nombre materia">
            </div>
            <div class="text-center" style="margin-left: 250px; margin-right: 250px;">
                <input type="text" id="materia" name="mail" class="form-control mb-4" placeholder="Mail Profesor">
            </div>
            <div class="text-center" style="margin-left: 250px; margin-right: 250px;">
               <input type="text" id="materia" name="descripcion" class="form-control mb-4" placeholder="Descripcion">
            </div>
            <div class="text-center" style="margin-left: 250px; margin-right: 250px;">
                <input type="password" id="materia" name="pass" class="form-control mb-4" placeholder="Contraseña">
            </div>
           <div class="text-center" style="margin-left: 250px; margin-right: 250px;">
               <lavel>Imagen principal</lavel>
               <input type="file" id="materia" name="imagen" class="form-control mb-4" placeholder="Imagen">
           </div>

            <!-- Sign in button -->
            <button class="btn btn-info my-4 btn-lg btn-warning border-dark" type="submit">Enviar</button>
        </form>
        <div class="container" style="text-align: center">

                @if($alert)
                    <button class="btn btn-info my-4 btn-lg btn-danger border-dark btn">El mail no existe</button>
                @endif

        </div>


    </div>
    @include('layouts.footer')
</body>
</html>