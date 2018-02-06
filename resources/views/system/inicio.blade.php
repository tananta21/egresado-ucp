@extends('index')
@section('content')

    @if (Session::has('alert'))
        <div class="alert alert-danger alert-dismissable">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{!! Session::has('alert') ? Session::get("alert") : '' !!} !!</strong>.
        </div>
    @endif

    <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="display: none">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{url('/')}}/img/portfolio/fullsize/1.jpg"
                         class="egresado__slider__img">
                </div>

                <div class="item">
                    <img src="{{url('/')}}/img/portfolio/fullsize/2.jpg"
                         class="egresado__slider__img">
                </div>

                <div class="item">
                    <img src="{{url('/')}}/img/portfolio/fullsize/3.jpg"
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
        <h4>Aca se mostrara el cntenido de inicio del sistema de egresados de la universidad cientifica del peu</h4>
    </div>

@endsection
@section("js")
    <script>
        $(".inicio").addClass("active");
    </script>
@stop