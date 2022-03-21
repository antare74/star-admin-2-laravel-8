<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Cycling - Dashboard')</title>

    <!-- base style -->
    {!! Html::style('base/css/vertical-layout-light/style.css') !!}

    <!-- plugins:css -->
    {!! Html::style('base/js/plugins/feather/feather.css') !!}
    {!! Html::style('base/js/plugins/mdi/css/materialdesignicons.min.css') !!}
    {!! Html::style('base/js/plugins/ti-icons/css/themify-icons.css') !!}
    {!! Html::style('base/js/plugins/typicons/typicons.css') !!}
    {!! Html::style('base/js/plugins/simple-line-icons/css/simple-line-icons.css') !!}
    {!! Html::style('base/js/plugins/css/vendor.bundle.base.css') !!}
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="{{ asset('base/js/plugins/datatables.net-bs4/dataTables.bootstrap4.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('base/js/scripts/select.dataTables.min.css') }}"> -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    {!! Html::style('base/css/vertical-layout-light/style.css') !!}
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ url('base/images/favicon.png') }}" />

    @yield('css')
</head>

<body>
    <div class="container-scroller">
        @include('layouts.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('layouts.settings-panel')
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('layouts.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    {!! Html::script('base/js/plugins/js/vendor.bundle.base.js') !!}
    <!-- endinject -->

    <!-- Plugin js for this page -->
    {!! Html::script('base/js/plugins/chart.js/Chart.min.js') !!}
    {!! Html::script('base/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') !!}
    {!! Html::script('base/js/plugins/progressbar.js/progressbar.min.js') !!}
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    {!! Html::script('base/js/scripts/off-canvas.js') !!}
    {!! Html::script('base/js/scripts/hoverable-collapse.js') !!}
    {!! Html::script('base/js/scripts/template.js') !!}
    {!! Html::script('base/js/scripts/settings.js') !!}
    {!! Html::script('base/js/scripts/todolist.js') !!}
    <!-- endinject -->

    @yield('js')
</body>

</html>
