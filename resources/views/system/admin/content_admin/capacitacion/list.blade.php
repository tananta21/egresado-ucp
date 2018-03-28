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
            <h5 class="bold">Lista de capacitaciones</h5>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
            <a class="btn btn-primary reco__btnAdd" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i> Agregar capacitación
            </a>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo capacitación</th>
                    <th>Precio</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acción</th>
                </tr>
                </thead>
                <tbody>
                @if($capacitaciones->isEmpty())
                    <tr class="text-center">
                        <td colspan="6">No se encontraron registros</td>
                    </tr>
                @else
                    <span style="display: none">{{{ '' != $i = 1 }}}</span>
                    @foreach($capacitaciones as $item)
                        <tr>
                            <th>{{{ $i++ }}}</th>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->tipoCapacitacion->nombre}}</td>
                            <td>S/. {{$item->precio}}</td>
                            <td class="text-center">
                                @if($item->is_active == 1)
                                    <label for="" class="label label-success">Abierto</label>
                                @else
                                    <label for="" class="label label-danger">Cerrado</label>
                                @endif

                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opciones <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{route('admin_capacitacion_detalle',['id'=>$item->id])}}" >
                                                <i class="fa fa-eye"></i> Detalles
                                            </a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="{{route('admin_capacitacion_postulantes',['id'=>$item->id])}}">
                                                <i class="fa fa-users"></i> Inscritos
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title bold">Registrar nueva capacitación</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin_capacitacion_create')}}" method="post" role="form">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label>Tipo capacitación:</label>
                            <select required="" class="form-control input_select" name="tipo_capacitacion_id">
                                <option value="">Seleccione tipo de capacitación</option>
                                @foreach($tipoCapacitacion as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nombre :</label>
                            <input type="text" class="form-control" placeholder="Especificar nombre"
                                   name="nombre" required>
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
        $(".admin_capacitacion_list").addClass("active");
    </script>
@stop