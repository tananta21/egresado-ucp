<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | voy de viaje</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    {{--<link rel="icon" type="image/png" href="{{url('/')}}/login/images/icons/favicon.ico"/>--}}
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/login/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-t-50 p-b-90">
            <form action="/auth/register/form" method="post" class="login100-form validate-form flex-sb flex-w" role="form" >
                {!! csrf_field() !!}
					<span class="login100-form-title p-b-51">
						Registrarse
					</span>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Nombres es requerido">
                    <label for=""></label>
                    <input class="input100" type="text" name="name" placeholder="Nombres completos">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Apellidos es requerido">
                    <label for=""></label>
                    <input class="input100" type="text" name="surname" placeholder="Apellidos completos">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Correo electrónico es requerido">
                    <input class="input100" type="email" name="email" placeholder="Correo electrónico">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input m-b-16" data-validate = "Contraseña es requerida">
                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-16" data-validate = "Confirmar Contraseña">
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirmar Contraseña">
                    <span class="focus-input100"></span>
                </div>

                @if (count($errors))
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>{{$error}}</strong>
                        </div>
                    @endforeach
                @endif
                <div class="container-login100-form-btn m-t-17" style="display: flex; flex-wrap: nowrap">
                    <a href="/" class="loginCancelar100-form-btn">
                        Cancelar
                    </a>
                    <button type="submit" class="login100-form-btn">
                        Aceptar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{url('/')}}/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/login/vendor/bootstrap/js/popper.js"></script>
<script src="{{url('/')}}/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/login/vendor/daterangepicker/moment.min.js"></script>
<script src="{{url('/')}}/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/login/js/main.js"></script>

</body>
</html>