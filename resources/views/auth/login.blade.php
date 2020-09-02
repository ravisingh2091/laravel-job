<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Login</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
{{ Html::style('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}
{{ Html::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
{{ Html::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
{{ Html::style('assets/css/animate.min.css') }}
{{ Html::style('assets/css/style.min.css') }}
{{ Html::style('assets/css/style-responsive.min.css') }}
{{ Html::style('assets/css/theme/default.css') }}
<!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
{{ Html::script('assets/plugins/pace/pace.min.js') }}
<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login bg-black animated fadeInDown">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> PalmcoEnergy
                <small></small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>
        <!-- end brand -->
        <div class="login-content">
            <form action="{{ url('/login') }}" method="POST" class="margin-bottom-0">
                {{ csrf_field() }}
                <div class="form-group m-b-20">
                    <input id="email" type="email" class="form-control input-lg inverse-mode no-border"
                           placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus/>
                </div>
                <div class="form-group m-b-20">
                    <input id="password" type="password" class="form-control input-lg inverse-mode no-border"
                           placeholder="Password" name="password" required/>
                </div>
                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox" name="remember"/> Remember Me
                    </label>
                </div>
                <div class="login-buttons">
                    <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end login -->

</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
{{ Html::script('assets/plugins/jquery/jquery-1.9.1.min.js') }}
    {{ Html::script('assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}
    {{ Html::script('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}
    {{ Html::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}

    <!--[if lt IE 9]>
{{ Html::script('assets/crossbrowserjs/html5shiv.js') }}
{{ Html::script('assets/crossbrowserjs/respond.min.js') }}
{{ Html::script('assets/crossbrowserjs/excanvas.min.js') }}
<![endif]-->

{{ Html::script('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}
{{ Html::script('assets/plugins/jquery-cookie/jquery.cookie.js') }}
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="assets/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
</body>
</html>