@extends('system.admin.menu_admin')
@section("content_detalle")

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

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " style="float: right; text-align: right">
            <a class="egresado__nuevo__linkBack" href="{{route('admin_oferta_laboral_list')}}">
                <h5 class="egresado__nuevo__textBack bold">
                    <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i>
                    Lista de ofertas laborales
                </h5>
            </a>
        </div>
    </div>

    <div>
        <h5 class="atractivos__labelInfoGeneral">
            POSTULANTES DISPONIBLES
        </h5>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>DNI egresado</th>
                    <th>Nombres y Apellidos</th>
                    <th>Escuela Académica</th>
                    {{--<th class="text-center">Acción</th>--}}
                </tr>
                </thead>
                <tbody>
                @if(count($postulantes)==0)
                    <tr class="text-center">
                        <td colspan="6">No se encontraron registros</td>
                    </tr>
                @else
                    <span style="display: none">{{{ '' != $i = 1 }}}</span>
                    @foreach($postulantes as $item)
                        <tr>
                            <th>{{{ $i++ }}}</th>
                            <td>{{$item->dni}}</td>
                            <td>{{$item->nombre_alumno}} {{$item->apellido}}</td>
                            <td>{{$item->nombre_escuela}}</td>
                            {{--<td class="text-center">--}}
                                {{--<a href="{{route('egresado_ofertas_laborales_resumen',['id'=>$item->egresado_id])}}">--}}
                                    {{--<i class="fa fa-eye"></i> Ver oferta laboral--}}
                                {{--</a>--}}
                            {{--</td>--}}
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>

@endsection
@section("js")
    <script>
        $(".administracion").addClass("active");
        $(".admin_oferta_laboral_list").addClass("active");
    </script>
@stop