@extends('system.admin.menu_report')
@section("content_detalle")
    <div class="col-md-12 col-sm-12">
        <h4 class="report__tittle">
            <strong>Áreas laborales, categorizado por escuelas.</strong>
        </h4>
    </div>
    <div class="col-md-12 col-sm-12 anulPadding">
        <div class=" col-md-9 col-sm-9 form-group">
            <label>Escuelas académicas:</label>
            <select class="form-control input_select" id="escuela_id">
                <option value="">Seleccione una opción</option>
                @foreach($escuelas as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3 col-sm-3">
            <button id="consult" class="btn btn-success m_t_25px">Consultar</button>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 report__containerGrafico">
        <h3 id="textResumen" class="report__textResumen">
            La información mostrada está basado en los datos actualizados por : <strong><span id="cantidad"></span>
                egresados</strong>
        </h3>
        <div id="loading" class="report__boxLoading">
            <img class="report__boxLoading__img" src="{{url('/')}}/img/utils/loading.gif" alt="Cargando datos...">
            <p class="report__boxLoading__text">Cargando datos...</p>
        </div>
        <div id="containerGrafico" class="report__grafico">
            <h5 class="text-center report__textWelcome">Seleccione una opción para graficar la información.</h5>
        </div>
        <h3 id="resultEmptytext" class="report__textEmptyResult">No se encontraron resultados.</h3>
    </div>
@endsection
@section("js")
    <script>
        var url = '{{route("api_report_area_laboral")}}';
        $('#consult').click(function () {
            $("#loading").css("display", "block");
            var escuela_id = $("#escuela_id").val();
            if (escuela_id != '') {
                var categories = new Array();
                var circular = new Array();
                var num_egresados = 0;
                $.ajax({
                    type: 'GET',
                    url: url,
                    data: {
                        escuela_id: escuela_id
                    },
                    dataType: 'JSON',
                    beforeSend: function () {
                    },
                    error: function () {
                    },
                    success: function (data) {
                        $("#loading").css("display", "none");
                        if (data[0].length == 0) {
                            $("#resultEmptytext").css("display", "block");
                            $("#textResumen").css("display", "none");
                            $("#containerGrafico").empty();
                        }
                        else {
                            $("#resultEmptytext").css("display", "none");
                            for (i = 0; i < data[0].length; i++) {
                                categories.push(data[0][i].nombre);
                                circular.push(data[0][i].cantidad);

                                num_egresados = num_egresados + (parseFloat(data[0][i].cantidad));
                            }
                            $("#textResumen").css("display", "block");
                            $("#cantidad").text(num_egresados);
                            window.onload = graficar(categories, circular);
                        }

                    }
                });
            }
            else {
                alert('Por favor!!, seleccione una opción');
                $("#loading").css("display", "none");
            }

        })

        function graficar(categories, datos) {
            var chart = Highcharts.chart('containerGrafico', {
                title: {
                    text: ''
                },

                subtitle: {
                    text: 'Plano'
                },

                xAxis: {
                    categories: categories
                },
                yAxis: {

                    title: {
                        text: 'Número de egresados'
                    },

                },


                series: [{
                    name: 'N° egresados laborando',
                    type: 'column',
                    colorByPoint: true,
                    data: datos,
                    showInLegend: false
                }]

            });

            window.onload = girar(chart);
        }

        function girar(chart) {
            chart.update({
                chart: {
                    inverted: true,
                    polar: false
                },
                subtitle: {
                    text: 'Áreas en el que se desempeñan los egresados del : '+$("#escuela_id").find('option:selected').text()
                }
            });
        }

    </script>

    <script>
        $(".reportes").addClass("active");
        $(".area_laboral").addClass("active");
    </script>
@stop