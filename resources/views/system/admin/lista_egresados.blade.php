@extends('index')
@section('content')
    <div class="row">
        {{--<div class="col-md-3">--}}
            {{--<label>Tipo Búsqueda</label>--}}
            {{--<select class="form-control input_select" id="sel1">--}}
                {{--<option>Cascadas</option>--}}
            {{--</select>--}}
        {{--</div>--}}
        <div class="col-md-9">
            <input type="text" class="form-control" placeholder="Buscar egresado">
        </div>
        <div class="col-md-1">
            <a href="" class="btn btn-primary width_100">
                <i class="fa fa-search"></i>
            </a>
        </div>

        <div class="col-md-2">
            <a href="{{route('nuevo_egresado')}}" class="btn btn-guardar width_100">
                <i class="fa fa-plus"></i> Nuevo egresado</a>
        </div>
    </div>
    <div class="row atractivos__list">
        <div class="col-lg-3 col-md-4">
            <a href="" class="atractivos__list__link">
                <div class="atractivos__list__item">
                    <img class="atractivos__list__img"
                         src="{{url('/')}}/img/utils/empty_user.png"
                         alt=""/>

                    <div class="atractivos__list__boxDescription">
                        <h3 class="atractivos__list__codigo">
                            <strong>Cod:</strong>72322246
                        </h3>
                        <h4 class="atractivos__list__nombres">
                            KEVIN ANTHONY TANANTA DEL AGUILA
                        </h4>
                        <h4 class="atractivos__list__carrera">
                            INGENIERÍA DE SISTEMAS DE INFORMACIÓN
                        </h4>

                    </div>
                </div>
            </a>
        </div>
    </div>

@endsection

@section("js")
    <script>
        $(".egresados").addClass("active");
    </script>
@stop