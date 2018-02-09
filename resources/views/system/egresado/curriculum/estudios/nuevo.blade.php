@extends('system.egresado.curriculum.menu_curriculum')
@section("content_detalle")
    <form action="{{route('egresado_estudio_create')}}" method="post" role="form">
        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <a class="egresado__nuevo__linkBack" href="{{route('egresado_estudio')}}">
                    <h5 class="egresado__nuevo__textBack bold">
                        <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Volver
                    </h5>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="{{route('egresado_estudio')}}" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <h5 class="atractivos__labelInfoGeneral">Registrar estudio</h5>
            <div class="form-group">
                <label>Nivel Estudio:</label>
                <select required="" class="form-control input_select" name="nivel_estudio_id">
                    <option value="">Seleccione nivel estudio</option>
                    @foreach($nivelEstudio as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Nombre institución:</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la institucion"
                       name="institucion" required>
            </div>
            <div class="form-group">
                <label>Nombre de la carrera:</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la carrera"
                       name="carrera" required>
            </div>
            <div class="form-group">
                <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12 padding_l_0">
                    <label>Nombre del país:</label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del país"
                           name="pais" required>
                </div>
                <div class="form-group col-lg-4 col-md-4  col-sm-12 col-xs-12 padding_l_0">
                    <label>Inicio:</label>
                    <input type="date" class="form-control"
                           name="inicio">
                </div>
                <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12 padding_r_0">
                    <label>Fin:</label>
                    <input type="date" class="form-control"
                           name="fin">
                </div>

            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>Estado de estudio:</label>
                <div class="radio">
                    <label><input type="radio" name="estado_estudio" value="0" checked >Estudios concluídos</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="estado_estudio" value="1">Estudiando actualmente</label>
                </div>
            </div>

        </div>
    </form>
@endsection
@section("js")
    <script>
        $(".estudios").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop