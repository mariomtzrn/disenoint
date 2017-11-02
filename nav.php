<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="">
            <a href="index.html" class="logo">
                <img src="assets/images/logo.png" alt="logo" class="logo-lg" />
                <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
            </a>
        </div>
    </div>

    <!-- Top navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">

                <!-- Mobile menu button -->
                <div class="pull-left">
                    <button type="button" class="button-menu-mobile visible-xs visible-sm">
                        <i class="fa fa-bars"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>

                <!-- Top nav left menu -->
                <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <!-- Top nav Right menu -->
                <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                    <li class="hidden-xs">
                        <form role="search" class="navbar-left app-search pull-left">
                             <input type="text" placeholder="Search..." class="form-control">
                             <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="dropdown top-menu-item-xs">
                        <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                            <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                        </a>
                        <ul class="dropdown-menu p-0 dropdown-menu-lg">
                            <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                            <li class="list-group notification-list" style="height: 267px;">
                               <div class="slimscroll">
                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-user-plus bg-danger"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New user registered</h5>
                                            <p class="m-0">
                                                <small>You have 10 unread messages</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                    <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-diamond bg-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-cog bg-warning"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>
                               </div>
                            </li>
                            <!--<li>-->
                                <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                    <!--<small class="font-600">See all notifications</small>-->
                                <!--</a>-->
                            <!--</li>-->
                        </ul>
                    </li>

                    <li class="dropdown top-menu-item-xs">
                        <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-10"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-10"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-10"></i> Lock screen</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div> <!-- end container -->
    </div> <!-- end navbar -->
</div>
<!-- Top Bar End -->


<!-- Page content start -->
<div class="page-contentbar">

    <!--left navigation start-->
    <aside class="sidebar-navigation">
        <div class="scrollbar-wrapper">
            <div>
                <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                    <i class="mdi mdi-close"></i>
                </button>
                <!-- User Detail box -->
                <div class="user-details">
                    <div class="pull-left">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <a href="#">Stanley Jones</a>
                        <p class="text-muted m-0">Administrator</p>
                    </div>
                </div>
                <!--- End User Detail box -->

                <!-- Left Menu Start -->
                <ul class="metisMenu nav" id="side-menu">
                    <li><a href="index.html"><i class="ti-home"></i> Dashboard </a></li>

                    <li><a href="ui-elements.html"><span class="label label-custom pull-right">11</span> <i class="ti-paint-bucket"></i> Agenda </a></li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Citas <span class="fa arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="assets/crud/citas.php">Ver citas</a></li>
                            <li><a href="components-range-slider.html">Registrar cita</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="ti-light-bulb"></i> Pacientes <span class="fa arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="components-range-slider.html">Ver pacientes</a></li>
                            <li><a href="components-range-slider.html">Registrar paciente</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" aria-expanded="true"><i class="ti-pencil-alt"></i> Médicos <span class="fa arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="true">
                            <li><a href="forms-general.html">Ver médicos</a></li>
                            <li><a href="forms-advanced.html">Registrar médico</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div><!--Scrollbar wrapper-->
    </aside>
    <!--left navigation end-->
