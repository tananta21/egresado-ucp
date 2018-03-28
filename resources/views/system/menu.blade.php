<div class="col-lg-12 col-md-12 col-xs-12 menuHorizontal">
    <ul class="menuHorizontal__ul">
        <li class="inicio">
            <a href="{{route('app_inicio')}}">Inicio</a>
        </li>
        <li class="egresados">
            <a href="{{route('lista_egresados')}}">Egresados</a>
        </li>

        @if(Auth::user()->tipo_usuario_id == config('global.user_egresado'))
            <li class="capacitaciones">
                <a href="{{route('egresado_capacitaciones')}}">Cursos y Talleres</a>
            </li>
            <li class="ofertas_laborales">
                <a href="{{route('egresado_ofertas_laborales')}}">Ofertas Laborales</a>
            </li>
            <li class="curriculum">
                <a href="{{route('datos_personales')}}">Currículum</a>
            </li>
            <li class="seguimiento">
                <a href="{{route('egresado_situacion_laboral')}}">Seguimiento</a>
            </li>
        @endif
        @if(Auth::user()->tipo_usuario_id == config('global.user_admin'))
            <li class="">
                <a href="">Reportes</a>
            </li>
            <li class="administracion">
                <a href="{{route('admin_inicio')}}">Administración</a>
            </li>
        @endif
    </ul>
</div>