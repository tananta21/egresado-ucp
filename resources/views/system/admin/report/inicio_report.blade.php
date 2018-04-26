@extends('system.admin.menu_report')
@section("content_detalle")
    <div>
        <h3 class="text-center">
            Menú de reportes del sistema de egresados de la Universidad Científica del Perú - sede Tarapoto
        </h3>
    </div>
@endsection
@section("js")
    <script>
        $(".reportes").addClass("active");
        $(".report_inicio").addClass("active");
    </script>
@stop