@extends('system.egresado.curriculum.menu_curriculum')
@section("content_detalle")

    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif
    <form action="{{route('update_datos_personales')}}" method="post" enctype="multipart/form-data" role="form">
        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <h5 class="bold">Datos personales</h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="#" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <h5 class="atractivos__labelInfoGeneral">Datos del egresado</h5>
            <div class="col-lg-7 col-md-8 padding_lr_0">
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>DNI:</label>
                    <input type="number" class="form-control" placeholder="Ingrese número de DNI"
                           name="dni" value="{{$egresado['dni']}}" required>

                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Nombres:</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nombre completo"
                           name="nombre" value="{{$egresado['nombre']}}" required>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Apellidos:</label>
                    <input type="text" class="form-control" placeholder="Ingrese su apellido completo"
                           name="apellido" value="{{$egresado['apellido']}}" required>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Nacionalidad:</label>
                    <input type="text" class="form-control" placeholder="Ingrese su nacionalidad"
                           name="nacionalidad" value="{{$egresado['nacionalidad']}}">
                </div>

            </div>
            <div class="col-lg-5 col-md-4">
                <div class="egresado__nuevo__boxImg">
                    <img id="blah"
                         class="egresado__nuevo__boxImg__img"
                         @if($egresado['url_imagen'] == '')
                         src="{{url('/')}}/img/utils/empty_user.png"
                         @else
                         src="{{url('/')}}/{{$egresado['url_imagen']}}"
                         @endif
                         alt=""/>
                    <input style="padding: 0px 50px; width: 100%"
                           type='file' name="image" id="image" class="form-control atractivoInicio__input"
                           accept="image/gif, image/jpeg, image/png" onchange="readURL(this);"/>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_l_0">
                    <label>Telefono fijo:</label>
                    <input type="number" class="form-control" placeholder="Ingrese su teléfono fijo"
                           name="tel_fijo" value="{{$egresado['tel_fijo']}}">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_r_0">
                    <label>Telefono celular:</label>
                    <input type="number" class="form-control" placeholder="Ingrese su teléfono celular"
                           name="tel_celular" value="{{$egresado['tel_celular']}}">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_l_0">
                    <label>Correo electrónico:</label>
                    <input type="email" class="form-control" placeholder="Ingrese su correo electrónico"
                           name="email" value="{{$egresado['email']}}">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_r_0">
                    <label>Página web personal:</label>
                    <input type="text" class="form-control" placeholder="Ingrese el link de su página"
                           name="pagina_web" value="{{$egresado['pagina_web']}}">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_l_0">
                    <label class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                        Estado civil:</label>
                    <div class="col-lg-12 col-md-12 padding_lr_0">
                        <select class="form-control input_select" name="estado_civil" required>
                            <option selected value="">Seleccione su estado civil</option>
                            @foreach($estados as $item)
                                @if($egresado['estado_civil'] ==$item->id )
                                    <option selected value="{{$item->id}}">{{$item->nombre}}</option>
                                @else
                                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                    <label>Dirección actual:</label>
                    <input type="text" class="form-control" placeholder="Ingrese su dirección"
                           name="direccion" value="{{$egresado['direccion']}}">
                </div>
            </div>


        </div>
    </form>
@endsection
@section("js")
    <script>
        $(".datos_personales").addClass("active");
        $(".curriculum").addClass("active");
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop