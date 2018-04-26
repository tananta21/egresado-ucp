@extends('system.admin.menu_report')
@section("content_detalle")
    <ul class="nav nav-tabs">
        <li class="situacion_laboral">
            <a href="{{route('report_situacion_laboral')}}">Situación laboral</a>
        </li>
        <li><a href="#">Sector de trabajo</a></li>
        <li><a href="#">Grado satisfacción</a></li>
    </ul>
    <div class="m_t_15px">
    @section("content_report")
    @show
    </div>
@endsection
