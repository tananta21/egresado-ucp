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
            <h5 class="bold">Lista de ofertas laborales</h5>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
            <a class="btn btn-primary reco__btnAdd" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i> Agregar Oferta
            </a>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre empresa</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th class="text-center">Estado</th>
                    <th class="text-center">Acción</th>
                </tr>
                </thead>
                <tbody>
                @if($ofertas->isEmpty())
                    <tr class="text-center">
                        <td colspan="6">No se encontraron registros</td>
                    </tr>
                @else
                    <span style="display: none">{{{ '' != $i = 1 }}}</span>
                    @foreach($ofertas as $item)
                        <tr>
                            <th>{{{ $i++ }}}</th>
                            <td>{{$item->nombre_empresa}}</td>
                            <td>{{$item->cargo}}</td>
                            <td>S/. {{$item->salario}}</td>
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
                                            <a href="{{route('admin_oferta_laboral_requisito',['id'=>$item->id])}}">
                                                <i class="fa fa-pencil"></i> Agregar Requisitos
                                            </a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="{{route('admin_oferta_laboral_postulantes',['id'=>$item->id])}}">
                                                <i class="fa fa-users"></i> Postulantes
                                            </a>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li>
                                            <a href="{{route('admin_oferta_laboral_resumen',['id'=>$item->id])}}">
                                                <i class="fa fa-eye"></i> Ver oferta laboral
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
                    <h4 class="modal-title bold">Registrar nueva oferta laboral</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin_oferta_laboral_create')}}" method="post" role="form">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="form-group">
                                    <label>Nombre Empresa:</label>
                                    <input type="text" class="form-control" placeholder="Ingrese nombre de la empresa"
                                           name="nombre_empresa" required>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label>RUC Empresa:</label>
                                    <input type="text" class="form-control" placeholder="RUC empresa"
                                           name="ruc_empresa" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Area laboral:</label>
                            <input type="text" class="form-control" placeholder="Descripción del area"
                                   name="area" required>
                        </div>
                        <div class="form-group">
                            <label>Cargo:</label>
                            <input type="text" class="form-control" placeholder="Descripción del cargo"
                                   name="cargo" required>
                        </div>

                        <div class="form-group">
                            <label>N° de vacantes:</label>
                            <input type="number" class="form-control" placeholder="Vacantes disponibles"
                                   name="nro_vacantes" required>
                        </div>
                        <div class="form-group">
                            <label>Disponibilidad:</label>
                            <select required="" class="form-control input_select" name="disponibilidad_id">
                                <option value="">Seleccione disponibilidad de trabajo</option>
                                @foreach($disponibilidad as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Duración:</label>
                            <input type="text" class="form-control" placeholder="Duración del trabajo"
                                   name="duracion" required>
                        </div>

                        <div class="form-group">
                            <label>Salario Mensual S/.:</label>
                            <input type="number" class="form-control" placeholder="Descripción del salario"
                                   name="salario" required>
                        </div>
                        <div class="form-group">
                            <label>Comentarios del salario:</label>
                            <input type="text" class="form-control" placeholder="Comisiones / incentivos (opcional)"
                                   name="comentario">
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