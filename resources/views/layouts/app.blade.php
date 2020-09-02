<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    {{ Html::style('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css') }}
    {{ Html::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ Html::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
    {{ Html::style('assets/css/animate.min.css') }}
    {{ Html::style('assets/css/style.min.css') }}
    {{ Html::style('assets/css/style-responsive.min.css') }}
    {{ Html::style('assets/css/theme/default.css') }}
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    @yield('page-style')
    <!-- ================== END PAGE LEVEL STYLE ================== -->


    <!-- ================== BEGIN BASE JS ================== -->
    {{ HTml::script('assets/plugins/pace/pace.min.js') }}
    <!-- ================== END BASE JS ================== -->
</head>
<body>
<!-- begin #page-loader -->
<div id="page-loader" class="fade in"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">

    @include('partials/header')
    @include('partials/nav')

    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="#" class="active">Home</a></li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">
            @yield('page-header', 'Page Header')
            <small>@yield('page-subheader', '')</small>
        </h1>
        <!-- end page-header -->

        @yield('content')

    </div>
    <!-- end #content -->s
    <!-- begin #footer -->
    <div id="footer" class="footer">
        © {{ Carbon\Carbon::now()->year }} PALMco Energy - All Rights Reserved
    </div>
    <!-- end #footer -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
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
@yield('page-js')
{{ Html::script('assets/js/apps.min.js') }}
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>

@yield('page-inline-js')

</body>
</html>

