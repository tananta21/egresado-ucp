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
            <a class="egresado__nuevo__linkBack" href="{{route('egresado_capacitaciones')}}">
                <h5 class="egresado__nuevo__textBack bold">
                    <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Volver a la
                   lista de cursos
                </h5>
            </a>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h2 class="capacitacion__detail__name">{{$capacitacion->nombre}}</h2>
        <div class="col-lg-12 col-md-12 anulPadding capacitacion__detail__itemHeader">
            <div class="col-lg-6 col-md-6">
                <h5>
                    <strong>Inscripciones: </strong>{{$capacitacion->inscripcion}}
                </h5>
            </div>
            <div class="col-lg-6 col-md-6">
                <a href="" class="btn btn-info pull-right">
                    <i class="fa fa-pencil"></i> INSCRIBIRME
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6">
                <div>
                    <h3 class="capacitacion__detail__subTittle">Inversión económica :</h3>
                    <p style="color: #004C97; font-weight: bold; font-size: 23px" class="capacitacion__detail__text">S/.{{$capacitacion->precio}}</p>
                </div>
                <div>
                    <h3 class="capacitacion__detail__subTittle">Objetivo General :</h3>
                    <p class="capacitacion__detail__text">{{$capacitacion->objetivo}}</p>
                </div>
                <div>
                    <h3 class="capacitacion__detail__subTittle">Metodología :</h3>
                    <p class="capacitacion__detail__text">{{$capacitacion->metodologia}}</p>
                </div>
                <div>
                    <h3 class="capacitacion__detail__subTittle">Dirigido a :</h3>
                    <p class="capacitacion__detail__text">{{$capacitacion->dirigido}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 capacitacion__detail__itemRight">
                <div>
                    <h2 class="capacitacion__detail__itemRight__subTitle">
                        Organizado por :
                    </h2>
                    <p class="capacitacion__detail__itemRight__text">{{$capacitacion->organizacion}}</p>
                </div>
                <div>
                    <h2 class="capacitacion__detail__itemRight__subTitle">
                        Inicio y fin de clases:
                    </h2>
                    <p class="capacitacion__detail__itemRight__text">{{$capacitacion->inicio_fin}}</p>
                </div>
                <div>
                    <h2 class="capacitacion__detail__itemRight__subTitle">
                        Horario:
                    </h2>
                    <p class="capacitacion__detail__itemRight__text">{{$capacitacion->horario}}</p>
                </div>

                <div>
                    <h2 class="capacitacion__detail__itemRight__subTitle">
                        Sede:
                    </h2>
                    <p class="capacitacion__detail__itemRight__text">{{$capacitacion->sede}}</p>
                </div>


            </div>
        </div>


    </div>


@endsection
@section("js")
    <script>
        $(".capacitaciones").addClass("active");
    </script>
@stop