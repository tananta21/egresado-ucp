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
            <h5 class="bold">Lista de estudios</h5>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
            <a class="btn btn-primary reco__btnAdd" href="{{route('egresado_estudio_nuevo')}}">
                <i class="fa fa-plus"></i> Agregar estudio
            </a>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nivel estudio</th>
                    <th>Carrera</th>
                    <th>institución</th>
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
                            <td>{{$item->nivel_estudio_id}}</td>
                            <td>{{$item->carrera}}</td>
                            <td>{{$item->institucion}}</td>
                            <td class="text-center">
                                <a href=""
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
    </div>

@endsection
@section("js")
    <script>
        $(".estudios").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop