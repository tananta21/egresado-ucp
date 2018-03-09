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
            OFERTAS LABORALES DISPONIBLES
        </h5>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre empresa</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                    <th class="text-center">Postular al trabajo</th>
                    <th class="text-center">Acción</th>
                </tr>
                </thead>
                <tbody>
                @if(count($ofertas)==0)
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
                                @if($item->postulacion == 0 || $item->postulacion == '')
                                    <a href="{{route('egresado_ofertas_laborales_send_curriculum',['id'=>$item->id])}}" style="font-size: 14px; cursor: pointer;text-decoration: none">
                                        <label style="font-size: 14px; cursor: pointer;" for="" class="label label-success"><i class="fa fa-file-word-o"></i>  Enviar Currículum</label>
                                    </a>

                                @else
                                    <label style="font-size: 14px" for="" class="label label-primary">Currículum enviado</label>
                                @endif

                            </td>
                            <td class="text-center">
                                <a href="{{route('egresado_ofertas_laborales_resumen',['id'=>$item->id])}}">
                                    <i class="fa fa-eye"></i> Ver oferta laboral
                                </a>
                            </td>
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
        $(".ofertas_laborales").addClass("active");
    </script>
@stop