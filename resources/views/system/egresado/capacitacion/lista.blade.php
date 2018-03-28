@extends('index')
@section('content')

    @if (Session::has('alert'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{!! Session::has('alert') ? Session::get("alert") : '' !!} !!</strong>.
        </div>
    @endif
    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif

    <div>
        <h5 class="atractivos__labelInfoGeneral">
            CURSOS Y TALLERES DISPONIBLES
        </h5>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            @if(count($ofertas)==0)
                <tr class="text-center">
                    <td colspan="6">No se encontraron registros</td>
                </tr>
            @else
                <div class="row flex-wrap">
                    @foreach($ofertas as $item)
                        <div class="col-lg-6 col-md-6 capacitacion__item">
                            <a href="{{route('egresado_capacitaciones_resumen',['id'=>$item->id])}}"
                               class="capacitacion__nombre">
                                {{$item->nombre}}
                            </a>
                            <h4>
                                <strong>Inicio: </strong>{{$item->inicio_fin}}
                            </h4>
                            <h4>
                                <strong>Precio: </strong>S/. {{$item->precio}}
                            </h4>
                            <a class="btn btn-info pull-right" href="{{route('egresado_capacitaciones_form_inscripcion',['id'=>$item->id])}}">
                                <i class="fa fa-pencil"></i> INSCRIBIRME
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title bold">Formulario de inscripción</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('egresado_capacitaciones_register')}}" method="post" role="form">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="form-group col-lg-5 col-md-5 anulPadding">
                                    <label>N° Documento de identidad:</label>
                                    <input type="text" class="form-control" placeholder="Ingrese N° Documento de identidad "
                                           name="nro_documento" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 anulPadding">
                                    <label>Nombres:</label>
                                    <input type="text" class="form-control" placeholder="Ingrese nombres completos"
                                           name="nombre" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 anulPadding">
                                    <label>Apellidos:</label>
                                    <input type="text" class="form-control" placeholder="Ingrese apellidos completos"
                                           name="apellido" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 anulPadding">
                                    <label>Correo electrónico:</label>
                                    <input type="email" class="form-control" placeholder="Ingrese correo electrónico"
                                           name="correo" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 padding_r_0">
                                    <label>teléfono:</label>
                                    <input type="text" class="form-control" placeholder="Ingrese número telefónico"
                                           name="telefono" required>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 anulPadding">
                                    <label>Institución:</label>
                                    <select required="" class="form-control input_select" name="institucion_id">
                                        <option value="">Seleccione institución</option>
                                        @foreach($instituciones as $item)
                                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer  col-lg-12 col-md-12 anulPadding">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                            </div>

                        </div>

                    </form>
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