@extends('system.admin.menu_admin')
@section("content_detalle")

    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
            <a class="egresado__nuevo__linkBack" href="{{route('admin_capacitacion_list')}}">
                <h5 class="egresado__nuevo__textBack bold">
                    <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Volver a la
                    lista de capacitaciones
                </h5>
            </a>
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <form action="{{route('admin_capacitacion_detalle_update',['id'=>$capacitacion->id])}}" method="post" role="form">
            {!! csrf_field() !!}
            <h5 class="atractivos__labelInfoGeneral">Datos generales</h5>
            <div class="form-group">
                <label>Estado:</label>
                @if($capacitacion->is_active == 1)
                    <div class="radio">
                        <label><input type="radio" name="is_active" value="1" checked>Abierto</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="is_active" value="0">Cerrado</label>
                    </div>
                @else
                    <div class="radio">
                        <label><input type="radio" name="is_active" value="1">Abierto</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="is_active" value="0" checked>Cerrado</label>
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label>Tipo capacitación:</label>
                <select required class="form-control input_select" name="tipo_capacitacion_id">
                    @foreach($tipoCapacitacion as $item)
                        @if($capacitacion->tipo_capacitacion_id == $item->id)
                            <option value="{{$item->id}}" selected>{{$item->nombre}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" value="{{$capacitacion->nombre}}"
                       placeholder="Especificar nombre de la capacitación" required
                       name="nombre">
            </div>
            <div class="form-group">
                <label>Organizado por:</label>
                <input type="text" class="form-control" value="{{$capacitacion->organizacion}}"
                       placeholder="Especificar quien organiza la capacitación" required
                       name="organizacion">
            </div>
            <div class="form-group">
                <label>Inscripciones:</label>
                <input type="text" class="form-control" value="{{$capacitacion->inscripcion}}"
                       placeholder="Periodo de inscripción" required
                       name="inscripcion">
            </div>
            <div class="form-group">
                <label>Inicio y fin de clases :</label>
                <input type="text" class="form-control" value="{{$capacitacion->inicio_fin}}"
                       placeholder="Especificar inicio y fin de clases" required
                       name="inicio_fin">
            </div>
            <div class="form-group">
                <label>Horario :</label>
                <input type="text" class="form-control" value="{{$capacitacion->horario}}"
                       placeholder="Especificar horario que tendrá la capacitación" required
                       name="horario">
            </div>
            <div class="form-group">
                <label>Sede :</label>
                <input type="text" class="form-control" value="{{$capacitacion->sede}}"
                       placeholder="Especificar lugar donde se llevará a cabo"
                       name="sede">
            </div>
            <div class="form-group">
                <label>Precio S/. :</label>
                <input type="text" class="form-control" value="{{$capacitacion->precio}}"
                       placeholder="Especificar precio"
                       name="precio">
            </div>
            <div class="form-group">
                <label>Objetivo general :</label>
                <textarea class="form-control" rows="3" name="objetivo"></textarea>
            </div>
            <div class="form-group">
                <label>Metodología :</label>
                <textarea class="form-control" rows="3" name="metodologia"></textarea>
            </div>
            <div class="form-group">
                <label>Dirigido a :</label>
                <textarea class="form-control" rows="3" name="dirigido"></textarea>
            </div>
            <div class="form-group">
                <label>Contacto lugar referencia :</label>
                <input type="text" class="form-control" value="{{$capacitacion->lugar_contacto}}"
                       placeholder="Especificar donde se pueden inscribir"
                       name="lugar_contacto">
            </div>
            <div class="form-group">
                <label>Contacto teléfono :</label>
                <input type="text" class="form-control" value="{{$capacitacion->telefono}}"
                       placeholder="Especificar contacto telefónico"
                       name="telefono">
            </div>
            <div class="form-group">
                <label>Contacto celular :</label>
                <input type="text" class="form-control" value="{{$capacitacion->celular}}"
                       placeholder="Especificar contacto celular"
                       name="celular">
            </div>
            <div class="form-group">
                <label>Contacto correo :</label>
                <input type="text" class="form-control" value="{{$capacitacion->correo}}"
                       placeholder="Especificar contacto correo"
                       name="correo">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="{{route('admin_capacitacion_list')}}" class="btn btn-danger bold">Cancelar</a>
                <button class="btn btn-success bold">Actualizar Información</button>
            </div>

        </form>
    </div>

@endsection
@section("js")
    <script>
        $(".administracion").addClass("active");
        $(".admin_capacitacion_list").addClass("active");
    </script>
@stop