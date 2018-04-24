@extends('system.egresado.seguimiento.menu_seguimiento')
@section("content_detalle")
    <form action="{{route('egresado_update_situacion_laboral')}}" method="post" role="form" id="formSeguimiento">
        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <h5 class="egresado__nuevo__textBack bold atractivos__labelInfoGeneral text-uppercase">
                    Formulario de seguimiento laboral
                </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="javascript:history.back()" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <div class="form-group">
                <div class="col-lg-12 col-md-12 anulPadding">
                    <label>¿Actualmente se encuentra trabajando?</label>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="radio">
                        <label><input type="radio" name="is_work" value="1" checked>Sí, estoy trabajando</label>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="radio">
                        <label><input type="radio" name="is_work" value="0">No, ahora no estoy trabajo</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <h5 class="egresado__nuevo__textBack bold atractivos__labelInfoGeneral">
                Cuéntenos sobre su trabajo
            </h5>
            <div id="box_form">
                <div class="form-group col-lg-6 col-md-6 padding_l_0">
                    <label>Situación laboral actual :</label>
                    <select class="form-control input_select" name="situacion_laboral_id" required>
                        <option value="">Seleccione una opción</option>
                        @foreach($situacion_laboral as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 padding_r_0">
                    <label>Disponibilidad :</label>
                    <select class="form-control input_select" name="disponibilidad_id" required>
                        <option value="">Seleccione una opción</option>
                        @foreach($disponibilidad as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nombre de la empresa:</label>
                    <input type="text" class="form-control" placeholder="Especifique nombre de la empresa"
                           name="empresa" required>
                </div>
                <div class="form-group">
                    <label>Rubro de la empresa:</label>
                    <input type="text" class="form-control"
                           placeholder="Especifique rubro a la que se dedique la empresa"
                           name="rubro" required>
                </div>
                <div class="form-group">
                    <label>Area laboral de desempeño:</label>
                    <select class="form-control input_select" name="area_laboral_id" required>
                        <option value="">Seleccione area laboral</option>
                        @foreach($area_laboral as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Cargo:</label>
                    <input type="text" class="form-control" placeholder="Especifique cargo que desempeña en la empresa"
                           name="cargo" required>
                </div>


                <div class="form-group">
                    <label>Teléfono:</label>
                    <input type="number" class="form-control" placeholder="Especifique teléfono de la empresa"
                           name="telefono" required>
                </div>
                <div class="form-group">
                    <label>Página web:</label>
                    <input type="text" class="form-control" placeholder="Especifique página web de la empresa(Si no lo tiene: No disponible)"
                           name="pagina_web">
                </div>
                <div class="form-group col-lg-6 col-md-6 padding_l_0">
                    <label>Sector trabajo :</label>
                    <select class="form-control input_select" name="sector_trabajo_id" required>
                        <option value="">Seleccione una opción</option>
                        @foreach($sector_trabajo as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 padding_r_0">
                    <label>Grado de satisfación :</label>
                    <select class="form-control input_select" name="satisfaccion_id" required>
                        <option value="">Seleccione una opción</option>
                        @foreach($satisfaccion as $item)
                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            <div id="box_not_work">
                <h4 class="text-center bold padding_t_10">Por el momento estos datos no son necesarios</h4>
            </div>
        </div>
    </form>

@endsection
@section("js")
    <script>
        $(".situacion_laboral").addClass("active");
        $(".seguimiento").addClass("active");
    </script>
    <script>
        $(document).ready(function () {
            if ($('input[type=radio][name=is_work]').val() == 1) {
                $("#box_form").fadeIn();
                $("#box_not_work").css("display","none");
            }
            else if($('input[type=radio][name=is_work]').val() == 0){
                $("#formSeguimiento input, #formSeguimiento select ").removeAttr('required');
                $("#box_not_work").fadeIn();
            }

            $('input[type=radio][name=is_work]').change(function () {
                if (this.value == 1) {
                    $("#formSeguimiento :input, #formSeguimiento select ").attr('required','required');
                    $("#box_not_work").fadeOut();
                }
                else if (this.value == 0) {
                    $("#formSeguimiento :input, #formSeguimiento select ").removeAttr('required');
                    $("#box_not_work").fadeIn();
                }
            });
        });
    </script>
@stop