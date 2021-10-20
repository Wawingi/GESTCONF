<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>SIS-TFC</title>
        
	</head>
    <style>
        .cabecalho{
            text-align:center;
            margin:0px;
        }
        .cabecalho P{
            text-align:center;
            margin:5px;
            font-size:16px
        }
        .cabecalho > #dpto{
            font-weight:bold;
        }
        .cabecalho > #titulo{
            font-weight:bold;
            font-size:20px;
            margin:30px;
        }
        table{
            border-collapse:collapse;
        }
        .table,th,td{
            border:1px solid #111;
        }
        thead{
            background-color:#cfcfcf;
        }
        body{
            background-image: url('images/delegado.jpeg');
            background-position:center;
            background-size:300px;
            background-repeat:no-repeat;
            margin-bottom:0px;
            left:-40px;
        }
    </style>
    <body>      
        <!-- Inicio da Content -->
            @yield('content')
        <!-- Fim da Content -->
    </body>
</html>