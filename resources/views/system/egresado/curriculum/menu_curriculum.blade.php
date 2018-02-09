@extends('index')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-2">
                <div class="row">
                    <div>
                        <div class="sidebar-nav">
                            <div class="navbar navbar-default navSetting" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle btnMenuPerfil" data-toggle="collapse"
                                            data-target=".sidebar-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="lnr lnr-chevron-down btnMenuPerfil__icon"></span>
                                    </button>
                                    <span class="visible-xs navbar-brand">Menu de configuración</span>
                                </div>
                                <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="text-center">
                                            <h5 class="bold" style="color: #0B0318">
                                                Menu Currículum
                                            </h5>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="datos_personales">
                                            <a href="{{route('datos_personales')}}">
                                                <i class="fa fa-home iconMenuLateral" aria-hidden="true"></i>
                                                Datos Personales
                                            </a>
                                        </li>
                                        <li class="experiencias">
                                            <a href="{{route('experiencia_laboral')}}">
                                                <i class="fa fa-pencil-square iconMenuLateral" aria-hidden="true"></i>
                                                Experiencia Laboral
                                            </a>
                                        </li>

                                        <li class="estudios">
                                            <a href="{{route('egresado_estudio')}}">
                                                <i class="fa fa-book iconMenuLateral" aria-hidden="true"></i>
                                                Estudios
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-10 col-xs-12 contentProjectList__boxContent">
                @section("content_detalle")
                @show
            </div>
        </div>
    </div>
@endsection
