<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            body{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <a href="{{url('/')}}" class="navbar-brand">Eloquent-ORM</a>
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toogle" data-toggle="dropdown">
                        Consultas Eloquent
                        <span class="caret">
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('/all')}}">Todos los usuarios</a>
                        </li>
                        <li>
                            <a href="{{url('/get/f')}}">Todos los usuarios Femeninos Get</a>
                        </li>

                        <li>
                            <a href="{{url('/get/m')}}">Todos los usuarios Masculinos Get</a>
                        </li>

                    </ul>

                </li>

            </ul>

        </div>
    </nav>

        @yield('content')


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>

</html>
