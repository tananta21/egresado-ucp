@extends('system.egresado.curriculum.menu_curriculum')
@section("content_detalle")

    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif
    <form action="{{route('experiencia_laboral_create')}}" method="post" role="form">
        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <a class="egresado__nuevo__linkBack" href="{{route('experiencia_laboral')}}">
                    <h5 class="egresado__nuevo__textBack bold">
                        <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Volver
                    </h5>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="#" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <h5 class="atractivos__labelInfoGeneral">Registrar experiencia laboral</h5>
            <div class="form-group">
                <label>Tipo experiencia:</label>
                <select required="" class="form-control input_select" name="tipo_experiencia_id">
                    <option value="">Seleccione tipo experiencia</option>
                    @foreach($tipoExperiencias as $item)
                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Nombre empresa:</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la empresa"
                       name="empresa" required>
            </div>
            <div class="form-group">
                <label>Rubro empresa:</label>
                <input type="text" class="form-control" placeholder="Ingrese el rubro de la empresa"
                       name="rubro" required>
            </div>
            {{--<div class="form-group">--}}
            {{--<label>Cargo recibido:</label>--}}
            {{--<input type="text" class="form-control" placeholder="Ingrese el nombre del paquete turístico"--}}
            {{--name="puesto" required>--}}
            {{--</div>--}}
            <div class="form-group">
                <label>Cargo recibido:</label>
                <input type="text" class="form-control" placeholder="Ingrese el cargo recibido"
                       name="puesto" required>
            </div>
            <div class="form-group">
                <label>Área laboral:</label>
                <input type="text" class="form-control" placeholder="Ingrese el área laboral"
                       name="area_laboral" >
            </div>

            <div class="form-group">
                <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12 padding_l_0">
                    <label>Salario Promedio (S/.):</label>
                    <input type="text" class="form-control" placeholder="Salario percibiddo"
                           name="salario" >
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
                <label>Descripción:</label>
                <textarea class="form-control" rows="4" name="descripcion" required></textarea>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>Estado situación laboral:</label>
                <div class="radio">
                    <label><input type="radio" name="estado_trabajo" value="0" checked >Trabajo concluído</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="estado_trabajo" value="1">Laborando actualmente</label>
                </div>
            </div>

        </div>
    </form>
@endsection
@section("js")
    <script>
        $(".experiencias").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop