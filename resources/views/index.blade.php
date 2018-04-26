<!DOCTYPE html>
<html lang="es">
<head>
    <title>SE-UCP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{url('/')}}/css/lib/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="{{url('/')}}/css/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/js/libs/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{url('/')}}/cssStylus/pemopi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.2/css/fileinput.css">
    <link href="{{url('/')}}/style/voydeviaje.css" rel="stylesheet">
    {{--<link href="{{url('/')}}/style/egresado/egresado.css" rel="stylesheet">--}}
</head>
<body>
<nav class="navbar navbar-default headerUcp">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{% url 'landing:home' %}" class="navbar-brand textHeader">SECE - UCP</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="textHeader " href="#">{{Auth::user()->tipoUsuario->nombre}} : {{Auth::user()->nombre}}</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle textHeader" data-toggle="dropdown" role="button"
                       aria-haspopup="true"
                       aria-expanded="false">
                        <img class="imgPerfilheader" src="{{url('/')}}/img/utils/perfil2.png"
                             alt=""><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="/logout">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container content-body">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homeContent">
        @include('system.menu')
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0 egresado__body">
            @section("content")
            @show
        </div>
    </div>
</div>

<script src="{{url('/')}}/js/libs/jquery/jquery.min.js"></script>
<script src="{{url('/')}}/js/libs/bootstrap/bootstrap.min.js"></script>

<script src="{{url('/')}}/js/highchart/highcharts.js"></script>
<script src="{{url('/')}}/js/highchart/highcharts-more.js"></script>
<script src="{{url('/')}}/js/highchart/exporting.js"></script>

@yield("js")
@show
</body>
</html>
