@include('Admin.layouts.includes.head')

<body>

<!-- Main navbar -->
@include('Admin.layouts.includes.mainnav')
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
       @include('Admin.layouts.includes.side')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">



                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- Traffic sources -->
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title">@yield('content_name')</h6>
                                <div class="container-fluid">
                                    @yield('content')
                                </div>
                            </div>



                        </div>
                        <!-- /traffic sources -->

                    </div>

                </div>




                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
