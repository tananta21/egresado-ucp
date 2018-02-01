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
            <h5 class="bold">Lista de recomendaciones</h5>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
            <button class="btn btn-primary reco__btnAdd" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i> Nueva recomendación
            </button>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 reco__boxTable">
            <table class="table table-bordered reco__table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Descripción de la recomendacion</th>
                    <th class="text-center">Acción</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td>nombre</td>
                    <td class="text-center">
                        <a href=""
                           class="btn btn-cancelar">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>


        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title bold">Registrar nueva recomendación</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" role="form">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label>Descripción:</label>
                                <textarea class="form-control" rows="4" name="nombre" required></textarea>
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
        $(".experiencias").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop