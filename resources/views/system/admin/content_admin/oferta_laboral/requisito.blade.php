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
            <a class="egresado__nuevo__linkBack" href="{{route('admin_oferta_laboral_list')}}">
                <h5 class="egresado__nuevo__textBack bold">
                    <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i> Volver a la
                    lista de ofertas
                </h5>
            </a>
        </div>

    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <form action="{{route('admin_oferta_laboral_requisito_update',['id'=>$oferta->id])}}" method="post" role="form">
            {!! csrf_field() !!}
            <h5 class="atractivos__labelInfoGeneral">Requisitos</h5>
            <div class="form-group">
                <label>Estudios mínimos:</label>
                <input type="text" class="form-control" value="{{$oferta->estudios_minimo}}"
                       placeholder="Estudios mínimos requeridos(Bachiller, titulado, etc.)"
                       name="estudios_minimo">
            </div>
            <div class="form-group">
                <label>Características:</label>
                <input type="text" class="form-control" placeholder="Responsable, puntualidad, etc."
                       name="caracteristicas" value="{{$oferta->caracteristicas}}">
            </div>
            <div class="form-group">
                <label>Experiencia mínima:</label>
                <input type="text" class="form-control" placeholder="Timepo experiencia 1 año, 2 años, ect."
                       name="experiencia_minima" value="{{$oferta->experiencia_minima}}">
            </div>
            <div class="form-group">
                <label>Movilidad:</label>
                @if($oferta->movilidad == 1 || $oferta->movilidad == '' )
                    <div class="radio">
                        <label><input type="radio" name="movilidad" value="1" checked>Sí</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="movilidad" value="0">No</label>
                    </div>
                @else
                    <div class="radio">
                        <label><input type="radio" name="movilidad" value="1">Sí</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="movilidad" value="0" checked>No</label>
                    </div>
                @endif
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <button class="btn btn-success bold">Actualizar Información</button>
            </div>
        </form>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">Carreras afines para el trabajo
            <button class="btn btn-primary reco__btnAdd" data-toggle="modal" data-target="#myModalCarreras">
                <i class="fa fa-plus"></i> Añadir carrera
            </button>
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
        <h5 class="atractivos__labelInfoGeneral">Programas requeridos
            <button class="btn btn-primary reco__btnAdd" data-toggle="modal" data-target="#myModalProgramas">
                <i class="fa fa-plus"></i> Añadir programa
            </button>
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

    <div class="modal fade" id="myModalCarreras" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title bold">Registrar carrera</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin_oferta_laboral_carrera_create',['id'=>$oferta->id])}}" method="post"
                          role="form">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <select required="" class="form-control input_select" name="escuela_id">
                                <option value="">Seleccione carrera profesional</option>
                                @foreach($escuelas as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="myModalProgramas" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title bold">Registrar carrera</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin_oferta_laboral_programa_create',['id'=>$oferta->id])}}" method="post"
                          role="form">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label>Programas:</label>
                            <select required="" class="form-control input_select" name="programa_id">
                                <option value="">Seleccione un programa</option>
                                @foreach($programas as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nivel:</label>
                            <select required="" class="form-control input_select" name="nivel_capacidad_id">
                                <option value="">Seleccione un nivel</option>
                                @foreach($nivelCapacidad as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


@endsection
@section("js")
    <script>
        $(".administracion").addClass("active");
        $(".admin_oferta_laboral_list").addClass("active");
    </script>
@stop