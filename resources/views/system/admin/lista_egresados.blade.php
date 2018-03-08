@extends('index')
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif
    <div class="row">
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Buscar egresado">
        </div>
        <div class="col-md-1">
            <a href="" class="btn btn-primary width_100">
                <i class="fa fa-search"></i>
            </a>
        </div>
        @if(Auth::user()->tipo_usuario_id == config('global.user_admin'))
            <div class="col-md-2">
                <a href="{{route('nuevo_egresado')}}" class="btn btn-guardar width_100">
                    <i class="fa fa-plus"></i> Nuevo egresado</a>
            </div>
        @endif
    </div>
    <div class="row atractivos__list">
        @if($egresados->isEmpty())
            <div class="atractivos__boxEmpty">
                <img class="atractivos__boxEmpty__img"
                     src="{{url('/')}}/img/utils/empty_image.png"
                     alt=""/>
                <p class="atractivos__boxEmpty__text">No se encontraron registros</p>
            </div>
        @else
            @foreach($egresados as $egresado)
                <div class="col-lg-3 col-md-4">
                    <a href="" class="atractivos__list__link">
                        <div class="atractivos__list__item">
                            <img class="atractivos__list__img"
                                 src="{{url('/')}}/{{$egresado->url_imagen}}"
                                 alt=""/>

                            <div class="atractivos__list__boxDescription">
                                <h3 class="atractivos__list__codigo">
                                    <strong>Cod:</strong>{{$egresado->codigo}}
                                </h3>
                                <h4 class="atractivos__list__nombres text-uppercase">
                                    {{$egresado->nombre}} {{$egresado->apellido}}
                                </h4>
                                <h4 class="atractivos__list__carrera">
                                    INGENIERÍA DE SISTEMAS DE INFORMACIÓN
                                </h4>

                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif
    </div>

@endsection

@section("js")
    <script>
        $(".egresados").addClass("active");
    </script>
@stop