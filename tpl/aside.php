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
                                    <img src="../uploads/img/profile/<?php echo $user["picture"]; ?>" alt="picture" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="profile.php?type=admin&id=<?php echo $user["aid"]; ?>"><?php echo $user["fullname"]; ?></a>
                                    <p class="text-muted m-0">Medico</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="dashboard.php"><i class="ti-dashboard"></i> Dashboard </a></li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-user"></i> Medicos <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="lista-medicos.php">Lista</a></li>
                                        <li><a href="agregar-medico.php">Nuevo</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-user"></i> Pacientes <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="lista-pacientes.php">Lista</a></li>
                                        
                                        <li><a href="agregar-paciente.php">Nuevo</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-calendar"></i> Citas <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="calendario-citas.php">Calendario</a></li>
                                        <li><a href="lista-citas.php">Lista</a></li>
                                    </ul>
                                </li>
                                <li><a href="lista-areas-medicas.php"><i class="ti-tag"></i> Areas medicas </a></li>
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->
