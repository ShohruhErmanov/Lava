<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title> Admin Panel @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="/admin/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="/admin/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="/admin/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="/admin/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="/admin/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="/admin/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="/admin/css/custom.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">

    <div class="full_container">
        <div class="inner_container">

            <div class="topbar">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                                class="fa fa-bars"></i></button>
                        <div class="right_topbar">
                            <div class="icon_info">

                                <ul class="user_profile_dd">
                                    <li>
                                        <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                class="img-responsive rounded-circle"
                                                src="/admin/images/layout_img/user_img.jpg" alt="#" /><span
                                                class="name_user">{{ auth()->user()->name }}</span></a>
                                        <div class="dropdown-menu">
                                            {{-- <a class="dropdown-item" href="#"> <i class="fa fa-sign-out"></i></a> --}}

                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item ">
                                                    <i class="fa fa-sign-out text-danger"></i>
                                                    <span class="text-danger">Log Out</span>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>


            @include('admin.sidebar')




            <div id="content">
                @yield('content')
            </div>

        </div>
    </div>


    <!-- jQuery -->
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/popper.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="/admin/js/animate.js"></script>
    <!-- select country -->
    <script src="/admin/js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="/admin/js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="/admin/js/Chart.min.js"></script>
    <script src="/admin/js/Chart.bundle.min.js"></script>
    <script src="/admin/js/utils.js"></script>
    <script src="/admin/js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="/admin/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="/admin/js/custom.js"></script>
    <script src="/admin/js/chart_custom_style1.js"></script>
</body>

</html>

