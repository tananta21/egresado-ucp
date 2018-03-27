@extends('system.egresado.curriculum.menu_curriculum')
@section("content_detalle")
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">DATOS PERSONALES</h5>
        <div class="col-lg-7 col-md-8 padding_lr_0">
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>DNI:</label>
                <p>{{$egresado['dni']}}</p>

            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>Nombres:</label>
                <p>{{$egresado['nombre']}}</p>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>Apellidos:</label>
                <p>{{$egresado['apellido']}}</p>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>Nacionalidad:</label>
                <label>Apellidos:</label>
                <p>{{$egresado['nacionalidad']}}</p>
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
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_l_0">
                <label>Telefono fijo:</label>
                <p>{{$egresado['tel_fijo']}}</p>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_r_0">
                <label>Telefono celular:</label>
                <p>{{$egresado['tel_celular']}}</p>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_l_0">
                <label>Correo electrónico:</label>
                <p>{{$egresado['email']}}</p>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 padding_r_0">
                <label>Página web personal:</label>
                <p>{{$egresado['pagina_web']}}</p>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
                <label>Dirección actual:</label>
                <p>{{$egresado['direccion']}}</p>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">ESTUDIOS REALIZADOS</h5>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            @if($estudios->isEmpty())
                <span>No se encontraron registros</span>
            @else
                <span style="display: none">{{{ '' != $i = 1 }}}</span>
                @foreach($estudios as $item)
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <strong> {{{ $i++ }}}</strong>
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11">
                            <p><strong>{{$item->nivelEstudio->nombre}}</strong></p>
                            <p>{{$item->carrera}}</p>
                            <p>{{$item->institucion}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">IDIOMAS</h5>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            @if($idiomas->isEmpty())
                <span>No se encontraron registros</span>
            @else
                <span style="display: none">{{{ '' != $i = 1 }}}</span>
                @foreach($idiomas as $item)
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            {{{ $i++ }}}
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11">
                            {{$item->nombre}} <strong>({{$item->nivelCapacidad->nombre}})</strong>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
        <h5 class="atractivos__labelInfoGeneral">PROGRAMAS</h5>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            @if($programas->isEmpty())
                <span>No se encontraron registros</span>
            @else
                <span style="display: none">{{{ '' != $i = 1 }}}</span>
                @foreach($programas as $item)
                    <div class="row">
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            {{{ $i++ }}}
                        </div>
                        <div class="col-lg-11 col-md-11 col-sm-11">
                            {{$item->programa->nombre}} <strong>({{$item->nivelCapacidad->nombre}})</strong>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>



@endsection
@section("js")
    <script>
        $(".perfil_publico").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop