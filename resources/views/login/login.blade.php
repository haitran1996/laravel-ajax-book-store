<!DOCTYPE html>
<head>
    <!-- templatemo 418 form pack -->
    <!--
    Form Pack
    http://www.templatemo.com/preview/templatemo_418_form_pack
    -->
    <title>Login</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{asset("css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{  asset("css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/bootstrap-theme.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/bootstrap-social.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ asset("css/templatemo_style.css") }}" rel="stylesheet" type="text/css">
{{--    //len doc jquery vao phan down load keo xuong dsn sau day copy 1 path, =>'google' , microsoft deu duoc--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body class="templatemo-bg-image-1">
<div class="container">
    <div class="col-md-12">
        <form class="form-horizontal templatemo-login-form-2" role="form"
              action="{{ route('login') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h1>Login</h1>
                </div>
            </div>
            <div class="row">
                <div class="templatemo-one-signin col-md-6">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="email" class="control-label">Email</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" class="form-control @error('email') alert-danger @enderror" id="email" value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <p style="color: red">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="password" class="control-label" >Password</label>
                            <div class="templatemo-input-icon-container">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control @error('password') alert-danger @enderror" id="password"
                                       value="{{ old('password') }}"name="password">
                            </div>
                            <i class="fa fa-eye" style="position:relative; top: -27px; left: 259px " id="eye"></i>
                            @error('password')
                            <p style="color: red">{{ $message }}</p>
                            @else
                                @if(Session::has('wrong'))
                                    <p style="color: red">{{Session::get('wrong')}}</p>
                                @endif
                                @enderror
                        </div>
                    </div>

                    @error('password')
                    <p style="color: deeppink">{{ $message }}</p>
                    @enderror
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me" name="remember"> Remember me
                        <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                    </label>



                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Login" class="btn btn-warning">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="" class="text-center">Not have any account?</a>
                        </div>
                    </div>
                </div>
                <div class="templatemo-other-signin col-md-6">
                    <label class="margin-bottom-15">
                        One-click sign in using other services. Credit goes to <a rel="nofollow" href="http://lipis.github.io/bootstrap-social/">Bootstrap Social</a> for social sign in buttons.
                    </label>
                    <a class="btn btn-block btn-social btn-facebook margin-bottom-15">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>
                    <a class="btn btn-block btn-social btn-google-plus">
                        <i class="fa fa-google-plus"></i> Sign in with Google
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    //cu phap $('selector').action
    // chon phan tu co id la eye, tao function khi click vao phan tu co id=eye
    $('#eye').click(function () {
        console.log('a');
        //attr la ham lay ten thuoc tinh, neu co tham so thi set cai thuoc tinh day bang tham so truyen vao
        //neu thuoc tinh class cua eye == fa fa-eye tuc la dang mo mat thi doi no lai thanh hinh con mat dong
        // bang cach set class cho no la con mat dong
        //chuyen type trong o password thanh dang text tuc la nhinn thay duoc
        if ($(this).attr('class') === 'fa fa-eye') {
            $(this).attr('class','fa fa-eye-slash');
            $('#password').attr('type','text');
        } else {
            //neu thuoc tinh class cua eye la con mat dong
            //chuyen no thanh con mat mo
            //chuyen o password thanh type password
            $(this).attr('class','fa fa-eye');
            $('#password').attr('type','password');
        }
    });
</script>


</body>
</html>
