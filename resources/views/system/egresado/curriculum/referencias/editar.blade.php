@extends('system.egresado.curriculum.menu_curriculum')
@section("content_detalle")

    @if (Session::has('msg'))
        <div class="alert alert-success alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>Excelente! </strong>{!! Session::has('msg') ? Session::get("msg") : '' !!}.
        </div>
    @endif
    <form action="{{route('experiencia_laboral_create')}}" method="post" role="form">
        {!! csrf_field() !!}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_lr_0">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                <a class="egresado__nuevo__linkBack" href="{{route('experiencia_laboral')}}">
                    <h5 class="egresado__nuevo__textBack bold">
                        <i class="fa fa-angle-double-left egresado__nuevo__iconBack" aria-hidden="true"></i>
                        Volver
                    </h5>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pull-right text-right">
                <a href="#" class="btn btn-cancelar">Cancelar</a>
                <button class="btn btn-primary">Guardar</button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 atractivos__form__boxFormInfoGeneral">
            <h5 class="atractivos__labelInfoGeneral">Editar referencia laboral</h5>
            <div class="form-group">
                <label>Nombre empresa:</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre de la empresa"
                       name="empresa" required value="{{$referencia['empresa']}}">
            </div>
            <div class="form-group">
                <label>Nombres y apellidos:</label>
                <input type="text" class="form-control" placeholder="Ingrese nombres y apellidos de la referencia"
                       name="nombre" required value="{{$referencia['nombre']}}">
            </div>
            <div class="form-group">
                <label>Puesto:</label>
                <input type="text" class="form-control" placeholder="Ingrese el puesto de la persona referenciada"
                       name="puesto" required value="{{$referencia['puesto']}}">
            </div>
            <div class="form-group">
                <label>Teléfono:</label>
                <input type="text" class="form-control" placeholder="Ingrese el teléfono de la persona referenciada"
                       name="telefono" required value="{{$referencia['telefono']}}">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" placeholder="Ingrese el email de la persona referenciada"
                       name="email" value="{{$referencia['email']}}">
            </div>
        </div>
    </form>
@endsection
@section("js")
    <script>
        $(".referencias").addClass("active");
        $(".curriculum").addClass("active");
    </script>
@stop