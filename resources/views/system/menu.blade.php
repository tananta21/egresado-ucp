<div class="col-lg-12 col-md-12 col-xs-12 menuHorizontal">
    <ul class="menuHorizontal__ul">
        <li class="inicio">
            <a href="{{route('app_inicio')}}">Inicio</a>
        </li>
        <li class="egresados">
            <a href="{{route('lista_egresados')}}">Egresados</a>
        </li>
        <li class="">
            <a href="">Ofertas Laborales</a>
        </li>
        @if(Auth::user()->tipo_usuario_id == config('global.user_egresado'))
            <li class="curriculum">
                <a href="{{route('datos_personales')}}">Currículum</a>
            </li>
            <li class="">
                <a href="">Seguimiento</a>
            </li>
        @endif
        <li class="">
            <a href="">Reportes</a>
        </li>
        @if(Auth::user()->tipo_usuario_id == config('global.user_admin'))
            <li class="">
                <a href="">Administración</a>
            </li>
        @endif
    </ul>
</div>