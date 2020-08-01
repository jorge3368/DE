<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>       
        <div class="container">
            <div class="row mt-5 pt-5 justify-content-center">
                <div class="col-3">
                    <a href="{{ url('empresas') }}" class="btn btn-block btn-primary">Empresas</a>
                
                </div>
                <div class="w-100"></div>
                <div class="col-3 mt-5">                       
                    <a href="{{ url('empleados') }}" class="btn btn-block btn-primary">Empleados</a>
                </div>
            </div>            
        </div>
        
    </body>
</html>
