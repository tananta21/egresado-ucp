@extends('index')
@section('content')

    @if (Session::has('alert'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{!! Session::has('alert') ? Session::get("alert") : '' !!} !!</strong>.
        </div>
    @endif

    <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="display: block">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{url('/')}}/img/slider/1.jpg"
                         class="egresado__slider__img">
                </div>


                <div class="item">
                    <img src="{{url('/')}}/img/slider/2.jpg"
                         class="egresado__slider__img">
                </div>

                <div class="item">
                    <img src="{{url('/')}}/img/slider/3.jpg"
                         class="egresado__slider__img">
                </div>
                <div class="item">
                    <img src="{{url('/')}}/img/slider/4.jpg"
                         class="egresado__slider__img">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div style="padding-top: 20px">
            <h5 style="line-height: 22px; font-size: 15px">¡Hola familia UCP!, la aplicación SE-UCP: te da la más cordial bienvenida a su página.
                <br>
                Es una aplicación que facilita el registro, actualización y administración de los egresados de la Universidad, asi como también registro de la hoja de vida del egresado,reportes y estadísticas, permitiendo promover la interacción permanente entre el egresado, la Institución de educación superior."

                Además se espera con el tiempo seguir mejorando el sistema de tal manera que cumplan con los siguientes componentes: ofertas laborales, noticias y eventos.

                Entonces lo que pretendemos es aprovechar el uso de las tecnologías web y el cyberespacio de Internet, dando a los alumnos de la Universidad Científica del Perú de Tarapoto un servicio solidario que se centra en los contenidos o curriculos que es la esencia que los estudiantes deben adquirir y facilitar en esta forma la adquisición de su propia producción curricular histórica y actualizada.</h5>
        </div>
    </div>

@endsection
@section("js")
    <script>
        $(".inicio").addClass("active");
    </script>
@stop