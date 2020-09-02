<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
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

</head>
<body>
    @yield('content')

</body>
</html>

