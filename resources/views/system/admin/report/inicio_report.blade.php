@extends('system.admin.menu_report')
@section("content_detalle")
    <div class="col-md-12 ol-sm-12">
        <h3 class="text-center">
            Menú de reportes del sistema de egresados de la Universidad Científica del Perú - sede Tarapoto
        </h3>
    </div>
    <div class="col-md-12 col-sm-12 text-center">
        <img height="300" src="{{url('/')}}/img/utils/dashboard_report.jpg" alt="">
    </div>
@endsection
@section("js")
    <script>
        $(".reportes").addClass("active");
        $(".report_inicio").addClass("active");
    </script>
@stop