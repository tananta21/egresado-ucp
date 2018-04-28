@extends('system.admin.menu_report')
@section("content_detalle")
    <ul class="nav nav-tabs">
        <li class="situacion_laboral">
            <a href="{{route('report_situacion_laboral')}}">Situación laboral</a>
        </li>
        <li class="sector_trabajo">
            <a href="{{route('report_sector_trabajo')}}">Sector trabajo</a>
        </li>
        <li class="grado_satisfaccion">
            <a href="{{route('report_grado_satisfaccion')}}">Grado satisfacción</a>
        </li>
    </ul>
    <div class="m_t_15px">
    @section("content_report")
    @show
    </div>
@endsection
