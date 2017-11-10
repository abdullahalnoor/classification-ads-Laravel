<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('/admin')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/admin')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/admin')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('/admin')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('/admin')}}/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset('/admin')}}/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{ asset('/admin')}}/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="{{ asset('/admin')}}/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('/admin')}}/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!--right collpsable menu   -->
        @include('admin.includes.left-menu-bar')
        <!--end right collpsable menue  -->

        <!-- top navigation -->
        @include('admin.includes.top-menu-bar')
      <!-- /top navigation -->

        <!-- page content -->
        @yield('body')
        <!-- /page content -->

        @include('admin.includes.footer')

    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('/admin')}}/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('/admin')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('/admin')}}/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="{{ asset('/admin')}}/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('/admin')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="{{ asset('/admin')}}/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('/admin')}}/vendors/moment/min/moment.min.js"></script>
<script src="{{ asset('/admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ asset('/admin')}}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="{{ asset('/admin')}}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="{{ asset('/admin')}}/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset('/admin')}}/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="{{ asset('/admin')}}/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="{{ asset('/admin')}}/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="{{ asset('/admin')}}/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="{{ asset('/admin')}}/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="{{ asset('/admin')}}/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="{{ asset('/admin')}}/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('/admin')}}/build/js/custom.min.js"></script>
</body>
</html>
