<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fishery Indonesia / Dashboard </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/animate.css') }}">
     <!-- modals CSS
		============================================ -->
        <link rel="stylesheet" href="{{ asset('dashboard/css/modals.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}">

    <!-- x-editor CSS
        ============================================ -->
        
        <link rel="stylesheet" href="{{ asset('dashboard/css/chosen/bootstrap-chosen.css') }}">  
        <link rel="stylesheet" href="{{ asset('dashboard/css/editor/select2.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/editor/datetimepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/editor/bootstrap-editable.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/editor/x-editor-style.css') }}">
        <link rel="stylesheet" href="{{ asset('dashboard/css/summernote/summernote.css') }}">

    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/responsive.css') }}">

    <!-- all type forms -->

    <link rel="stylesheet" href="{{ asset('dashboard/css/form/all-type-forms.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('dashboard/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">  

    <!-- jquery
		============================================ -->
        <script src="{{ asset('dashboard/js/vendor/jquery-1.12.4.min.js') }}"></script>
</head>

<body>
<?php 
  function current_page($uri = "/dashboard") { 
    return strstr(request()->path(), $uri); 
  } 

  function is_blog() {
      return current_page('allpost') || current_page('mypost') || current_page('categories');
  }

  function is_user() {
    return current_page('user')|| current_page('role') || current_page('permission');
}

?>
    @section('sidebar')
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">            
            <div class="sidebar-header mg-t-15">
                <a href="/admin"><img class="main-logo" src="/images/ikan.png" alt="" /></a>
                <!-- <strong><a href="/admin"><img src="img/logo/logosn.png" alt="" /></a></strong> -->
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav mg-t-15 left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>                                       
                            <a href="/home" aria-expanded="false" class="{{current_page('home') ? 'sidebar-active' : '' }}" ><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Blog</span></a>
                            <ul class="submenu-angle {{ is_blog() ? 'show' : ''}}" aria-expanded="false">
                                <li><a title="All Post" href="/mypost" class="{{current_page('mypost') ? 'sidebar-active' : '' }}"><span class="mini-sub-pro">All Post</span></a></li>
                                <li><a title="Add Post" href="/allpost" class="{{current_page('allpost') ? 'sidebar-active' : '' }}"><span class="mini-sub-pro ">New Post</span></a></li>
                                <li><a title="Edit Post" href="/categories" class="{{current_page('categories') ? 'sidebar-active' : '' }}"><span class="mini-sub-pro">Categories</span></a></li>
                            </ul>
                        </li>
                        @role('admin')
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">User</span></a>
                            <ul class="submenu-angle {{ is_user() ? 'show' : ''}}" aria-expanded="false">
                                <li><a title="All User" href="/user" class="{{current_page('user') ? 'sidebar-active' : '' }}"><span class="mini-sub-pro">All Users</span></a></li>
                                <li><a title="All Role" href="/role" class="{{current_page('role') ? 'sidebar-active' : '' }}"><span class="mini-sub-pro">Role</span></a></li>
                                <li><a title="All Permission" href="/permission" class="{{current_page('permission') ? 'sidebar-active' : '' }}"><span class="mini-sub-pro">Permissions</span></a></li>
                            </ul>
                        </li>
                       @endrole
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <!-- <a href="index.html"><img class="main-logo" src="{{ asset('dashboard/img/favicon.ico') }}" alt="" /></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                              <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                             @guest
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </li>
                                                    @if (Route::has('register'))
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                @endif
                                            @else 
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <img src="/storage/{{ Auth::user()->image_url }}" alt="Profile image"/>
                                                         <span class="admin-name">{{ Auth::user()->name }}</span> 
                                                          <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="/profile"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ><span class="edu-icon edu-user-rounded author-log-ic"></span>{{ __('Logout') }}</a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form> 
                                                    </ul>
                                                </li>
                                            @endguest
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     

            @yield('content')
            <!-- Mobile Menu end -->
            
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> . All rights reserved. Design by <a href="https://colorlib.com/wp/templates/">Fishery.id</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('dashboard/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('dashboard/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('dashboard/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('dashboard/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('dashboard/js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ asset('dashboard/js/morrisjs/morris.js') }}"></script>
    <script src="{{ asset('dashboard/js/morrisjs/morris-active.js') }}"></script>
    <script src="{{ asset('dashboard/js/morrisjs/home3-active.js') }}"></script>
    <script src="{{ asset('dashboard/js/morrisjs/morris-active-pro.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('dashboard/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ asset('dashboard/js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('dashboard/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/calendar/fullcalendar-active.js') }}"></script>
     
     <!-- form validate JS
		============================================ -->
        <script src="{{ asset('dashboard/js/form-validation/jquery.form.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/form-validation/form-active.js') }}"></script>
     <!-- multiple email JS
		============================================ -->
        <script src="{{ asset('dashboard/js/multiple-email/multiple-email-active.js') }}"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{ asset('dashboard/js/dropzone/dropzone.js') }}"></script>
     <!-- tab JS
		============================================ -->
        <script src="{{ asset('dashboard/js/tab.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('dashboard/js/plugins.js') }}"></script>
      <!--  editable JS
		============================================ -->
        <script src="{{ asset('dashboard/js/editable/jquery.mockjax.js') }}"></script>
        <script src="{{ asset('dashboard/js/editable/mock-active.js') }}"></script>
        <script src="{{ asset('dashboard/js/editable/select2.js') }}"></script>
        <script src="{{ asset('dashboard/js/editable/moment.min.js') }}"></script>
        <script src="{{ asset('dashboard/js/editable/bootstrap-datetimepicker.js') }}"></script>
        <script src="{{ asset('dashboard/js/editable/bootstrap-editable.js') }}"></script>
        <script src="{{ asset('dashboard/js/editable/xediable-active.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('dashboard/js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('dashboard/js/data-table/bootstrap-table-export.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</body>

</html>