@extends('index')
@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif
    <form action="{{route('crear_egresado')}}" method="post" role="form">
        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <a class="egresado__nuevo__linkBack" href="{{route('lista_egresados')}}">
                    <h5 class="egresado__nuevo__textBack bold">
                        <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Lista de Egresados
                    </h5>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="{{route('lista_egresados')}}" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-guardar">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <h5 class="atractivos__labelInfoGeneral">Datos del egresado</h5>
            <div class="col-lg-8 col-md-8 padding_lr_0">
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Cod. Matrícula:</label>
                    <input type="number" class="form-control" placeholder="Ingrese nombre del atractivo"
                           name="codigo" value="" required>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Apellidos:</label>
                    <input type="text" class="form-control" placeholder="Ingrese nombre del atractivo"
                           name="apellido" value="" required>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Nombres:</label>
                    <input type="text" class="form-control" placeholder="Ingrese nombre del atractivo"
                           name="nombre" value="" required>
                </div>
                {{--<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">--}}
                    {{--<label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">--}}
                        {{--Facultad:</label>--}}
                    {{--<div class="col-lg-12 col-md-12 padding_lr_0">--}}
                        {{--<select class="form-control input_select" name="facultad_id">--}}
                            {{--<option value="">Seleccione una facultad</option>--}}
                            {{--@foreach($facultad as $item)--}}
                                {{--<option value="{{$item->id}}">{{$item->nombre}}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                        Escuela:</label>
                    <div class="col-lg-12 col-md-12 padding_lr_0">
                        <select class="form-control input_select" name="escuela_id" required>
                            <option value="">Seleccione una escuela</option>
                            @foreach($escuela as $item)
                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                        Semestre Egreso:</label>
                    <div class="col-lg-6 col-md-6 padding_lr_0">
                        <select class="form-control input_select" name="semestre_id" required>
                            <option value="">Seleccione un semestre</option>
                            @foreach($semestre as $item)
                                <option value="{{$item->id}}">{{$item->semestre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="egresado__nuevo__boxImg">
                    <img class="egresado__nuevo__boxImg__img"
                         src="{{url('/')}}/img/utils/empty_user.png"
                         alt=""/>
                </div>
            </div>


        </div>

    </form>

@endsection
@section("js")
    <script>
        $(".egresados").addClass("active");
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop