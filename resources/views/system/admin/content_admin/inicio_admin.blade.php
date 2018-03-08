@extends('system.admin.menu_admin')
@section("content_detalle")
    <div>
        <h3 class="text-center">Menú de configuración del administrador del sistema </h3>
    </div>
@endsection
@section("js")
    <script>
        $(".administracion").addClass("active");
        $(".admin_inicio").addClass("active");
    </script>
@stop