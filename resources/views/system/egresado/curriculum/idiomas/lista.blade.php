@extends('system.egresado.curriculum.menu_curriculum')
@section("content_detalle")

    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
            <h5 class="bold">Lista de Idiomas</h5>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
            <a class="btn btn-primary reco__btnAdd" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i> Agregar idioma
            </a>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Idioma</th>
                    <th>Nivel Capacidad</th>
                    <th class="text-center">Acción</th>
                </tr>
                </thead>
                <tbody>
                @if($items->isEmpty())
                    <tr class="text-center">
                        <td colspan="5">No se encontraron registros</td>
                    </tr>
                @else
                    <span style="display: none">{{{ '' != $i = 1 }}}</span>
                    @foreach($items as $item)
                        <tr>
                            <th>{{{ $i++ }}}</th>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->nivelCapacidad->nombre}}</td>
                            <td class="text-center">
                                <a href="{{route('egresado_idioma_delete',['id'=>$item->id])}}"
                                   class="btn btn-cancelar">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title bold">Registrar nuevo Idioma</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('egresado_idioma_create')}}" method="post" role="form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <select required="" class="form-control input_select" name="nivel_capacidad_id">
                                    <option value="">Seleccione nivel de aprendizaje</option>
                                    @foreach($nivelCapacidad as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nombre Idioma:</label>
                                <input type="text" class="form-control" placeholder="Ingrese nombre del idioma"
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
    </div>

@endsection
@section("js")
    <script>
        $(".idiomas").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop