@extends('index')
@section('content')

    @if (Session::has('alert'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{!! Session::has('alert') ? Session::get("alert") : '' !!} !!</strong>.
        </div>
    @endif

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
            <a class="egresado__nuevo__linkBack" href="{{route('egresado_ofertas_laborales')}}">
                <h5 class="egresado__nuevo__textBack bold">
                    <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Volver a la
                    Lista de ofertas laborales
                </h5>
            </a>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">DATOS GENERALES
        </h5>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>RUC Empresa :</strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->ruc_empresa}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Empresa :</strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->nombre_empresa}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Cargo: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->cargo}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Area laboral: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->area}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Disponibilidad: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->disponibilidad->nombre}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Jornada laboral: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->duracion}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Salario Mensual: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5><strong>S/. {{$oferta->salario}}</strong></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Comentario acerca del salario: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->comentario}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Estudios mínimos requeridos: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->estudios_minimo}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Experiencia mínima requerida: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->experiencia_minima}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Características personales: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->caracteristicas}}</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>Disponibilidad de Movilidad: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                @if($oferta->movilidad == 1 || $oferta->movilidad == '' )
                    <h5>SÍ</h5>
                @else
                    <h5>NO</h5>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-3">
                <h5><strong>N° de vacantes: </strong></h5>
            </div>
            <div class="col-lg-8 col-md-9">
                <h5>{{$oferta->nro_vacantes}}</h5>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">CARRERAS AFINES PARA EL TRABAJO
        </h5>
        @if($carreras->isEmpty())
            <p>No se encontraron registros</p>
        @else
            <span style="display: none">{{{ '' != $i = 1 }}}</span>
            @foreach($carreras as $item)
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">
                        {{{ $i++ }}}
                    </div>
                    <div class="col-lg-11 col-md-11 col-sm-11">
                        {{$item->escuela->nombre}}
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">PROGRAMAS REQUERIDOS
        </h5>
        @if($programasByOferta->isEmpty())
            <p>No se encontraron registros</p>
        @else
            <span style="display: none">{{{ '' != $i = 1 }}}</span>
            @foreach($programasByOferta as $item)
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1">
                        {{{ $i++ }}}
                    </div>
                    <div class="col-lg-11 col-md-11 col-sm-11">
                        {{$item->programa->nombre}} <strong>({{$item->nivelCapacidad->nombre}})</strong>
                    </div>
                </div>
            @endforeach
        @endif
    </div>


@endsection
@section("js")
    <script>
        $(".ofertas_laborales").addClass("active");
    </script>
@stop