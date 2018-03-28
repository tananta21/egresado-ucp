@extends('index')
@section('content')

    @if (Session::has('alert'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{!! Session::has('alert') ? Session::get("alert") : '' !!} !!</strong>.
        </div>
    @endif
    <h3 class="capacitacion__detail__name padding_b_10">{{$capacitacion->nombre}}</h3>
    <form action="{{route('egresado_capacitaciones_register',['id'=>$capacitacion->id])}}" method="post" role="form">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <h5 class="egresado__nuevo__textBack bold atractivos__labelInfoGeneral">
                    Formulario de inscripción
                </h5>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="javascript:history.back()" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">

            {!! csrf_field() !!}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="form-group col-lg-5 col-md-5 anulPadding">
                        <label>N° Documento de identidad:</label>
                        <input type="number" class="form-control" placeholder="Ingrese N° Documento de identidad "
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
                </div>

            </div>

        </div>
    </form>

@endsection
@section("js")
    <script>
        $(".capacitaciones").addClass("active");
    </script>
@stop